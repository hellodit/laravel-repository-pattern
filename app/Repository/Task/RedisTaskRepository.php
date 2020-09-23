<?php


namespace App\Repository\Task;


use App\Models\Task;
use Illuminate\Http\Request;

class RedisTaskRepository implements TaskRepository
{

    public function createTask(Request $request)
    {
        // TODO: Implement createTask() method.
    }

    public function getTasks()
    {
        // TODO: Implement getTasks() method.
    }

    public function getTasksById($id)
    {
        // TODO: Implement getTasksById() method.
    }

    public function updateTask(Request $request, $id)
    {
        // TODO: Implement updateTask() method.
    }

    public function setAsFinish($id)
    {
        // TODO: Implement setAsFinish() method.
    }
}
