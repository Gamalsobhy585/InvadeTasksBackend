<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Category;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::all();

        $homeTasks = [
            ['title' => 'Clean the house', 'description' => 'Do a thorough cleaning of the entire house', 'status' => 'pending', 'due_date' => '2024-07-30'],
            ['title' => 'Fix the sink', 'description' => 'Repair the kitchen sink', 'status' => 'completed', 'due_date' => '2024-08-01'],
            ['title' => 'Mow the lawn', 'description' => 'Mow the front and back lawns', 'status' => 'pending', 'due_date' => '2024-08-02'],
            ['title' => 'Organize the garage', 'description' => 'Clean and organize the garage', 'status' => 'pending', 'due_date' => '2024-08-03'],
            ['title' => 'Paint the living room', 'description' => 'Repaint the living room walls', 'status' => 'pending', 'due_date' => '2024-08-04'],
            ['title' => 'Fix the roof', 'description' => 'Repair the leak in the roof', 'status' => 'pending', 'due_date' => '2024-08-05'],
            ['title' => 'Install new lights', 'description' => 'Install new lighting in the kitchen', 'status' => 'completed', 'due_date' => '2024-08-06'],
            ['title' => 'Wash the windows', 'description' => 'Clean all the windows in the house', 'status' => 'pending', 'due_date' => '2024-08-07'],
            ['title' => 'Clean the basement', 'description' => 'Organize and clean the basement', 'status' => 'pending', 'due_date' => '2024-08-08'],
            ['title' => 'Fix the door', 'description' => 'Repair the front door hinge', 'status' => 'completed', 'due_date' => '2024-08-09'],
            ['title' => 'Replace the carpet', 'description' => 'Replace the old carpet in the bedroom', 'status' => 'pending', 'due_date' => '2024-08-10'],
            ['title' => 'Clean the attic', 'description' => 'Organize and clean the attic', 'status' => 'pending', 'due_date' => '2024-08-11'],
            ['title' => 'Fix the fence', 'description' => 'Repair the backyard fence', 'status' => 'completed', 'due_date' => '2024-08-12'],
            ['title' => 'Install new faucet', 'description' => 'Install a new faucet in the bathroom', 'status' => 'pending', 'due_date' => '2024-08-13'],
            ['title' => 'Clean the pool', 'description' => 'Clean and maintain the swimming pool', 'status' => 'pending', 'due_date' => '2024-08-14'],
            ['title' => 'Replace light bulbs', 'description' => 'Replace all burned-out light bulbs', 'status' => 'completed', 'due_date' => '2024-08-15'],
            ['title' => 'Fix the heater', 'description' => 'Repair the heating system', 'status' => 'pending', 'due_date' => '2024-08-16'],
            ['title' => 'Paint the fence', 'description' => 'Repaint the backyard fence', 'status' => 'pending', 'due_date' => '2024-08-17'],
            ['title' => 'Fix the gutter', 'description' => 'Clean and repair the gutters', 'status' => 'completed', 'due_date' => '2024-08-18'],
            ['title' => 'Clean the driveway', 'description' => 'Pressure wash the driveway', 'status' => 'pending', 'due_date' => '2024-08-19']
        ];

        $tasks = [
            'Home' => $homeTasks,
        ];

        foreach ($categories as $category) {
            if (isset($tasks[$category->name])) {
                foreach ($tasks[$category->name] as $task) {
                    Task::create([
                        'title' => $task['title'],
                        'description' => $task['description'],
                        'status' => $task['status'],
                        'due_date' => $task['due_date'],
                        'category_id' => $category->id,
                        'user_id' => 1, 
                    ]);
                }
            }
        }
    }
}
