<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;
use App\Models\Category;

class TaskPolicy
{

    public function view(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }


    public function viewAny(User $user): bool
    {
        return true;
    }

  
    public function create(User $user): bool
    {
        return true;
    }


    public function update(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

  
    public function delete(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

   
    public function restore(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }

   
    public function forceDelete(User $user, Task $task): bool
    {
        return $user->id === $task->user_id;
    }
}
