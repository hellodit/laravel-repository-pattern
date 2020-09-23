<?php

namespace App\Repository\Task;
use App\Models\Task;
use Illuminate\Http\Request;

class ElasticSearchTaskRepository implements TaskRepository
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function createTask(Request $request)
    {
        // TODO: Implement createTask() method.
    }

    /**
     * @return mixed
     */
    public function getTasks()
    {
        // TODO: Implement getTasks() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getTasksById($id)
    {
        // TODO: Implement getTasksById() method.
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function updateTask(Request $request, $id)
    {
        // TODO: Implement updateTask() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function setAsFinish($id)
    {
        // TODO: Implement setAsFinish() method.
    }
}
