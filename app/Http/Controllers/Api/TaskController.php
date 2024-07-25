<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;
use App\Http\Resources\TaskCollection;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 5); // Default to 5 items per page if not specified
        $tasks = Task::select('id', 'title', 'description', 'status', 'due_date', 'category_id')
                     ->with('category')
                     ->orderBy('id', 'asc')
                     ->paginate($perPage);
    
        return new TaskCollection($tasks);
    }

    public function show($id)
    {
        $task = Task::with('category')->findOrFail($id);
        return new TaskResource($task);
    }

    public function store(Request $request)
    {
        Log::info('Store Task Request:', $request->all());

        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,completed',
            'due_date' => 'nullable|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $task = Task::create($validatedData);
        Log::info('Task Created:', $task->toArray());

        return new TaskResource($task->load('category', 'user'));    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|string|in:pending,completed',
            'due_date' => 'nullable|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validatedData);

        return new TaskResource($task->load('category', 'user'));    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return response()->json(['message' => 'Task deleted successfully']);
    }

    public function restore($id)
    {
        $task = Task::onlyTrashed()->findOrFail($id);
        $task->restore();
        return new TaskResource($task->load('category'));
    }
}
