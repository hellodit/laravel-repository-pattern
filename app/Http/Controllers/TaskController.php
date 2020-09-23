<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Repository\Task\EloquentTaskRepository;
use App\Utils\Response;

class TaskController extends Controller
{
    use Response;
    protected $eloquentTask;

    public function __construct(EloquentTaskRepository $eloquentTask) {
        $this->eloquentTask = $eloquentTask;
    }

    public function tasks(){
        $tasks = $this->eloquentTask->getTasks();
        if (!$tasks->isEmpty()){
            return $this->responseDataCount($tasks);
        }
        return $this->responseDataNotFound('Data yang diminta tidak tersedia');
    }

    public function getTasksById($id){
        $task = $this->eloquentTask->getTasksById($id);
        if (!empty($task)){
            return $this->responseData($task);
        }
        return $this->responseDataNotFound('Data yang diminta tidak tersedia');
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $task = $this->eloquentTask->updateTask($request, $id);

        if ($task != null){
            return $this->responseData($task, "Data di ubah");
        }

        return $this->responseError('task tidak ditemukan', 404);

    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
           return $this->responseValidation($validator->errors());
        }
        $task = $this->eloquentTask->createTask($request);
        if (!empty($task)){
           return $this->responseData($task, "Data berhasil ditambahkan");
        }
        return $this->responseError();
    }

    public function setTaskFinish($id){
        $task = $this->eloquentTask->setAsFinish($id);
        if ($task != null){
            return $this->responseData($task,"Berhasil menyimpan data");
        }
        return $this->responseError('task tidak ditemukan', 404);
    }

    public function getTaskWithComments($task_id){
       $task = $this->eloquentTask->getTaskWithComments($task_id);
       if ($task != null){
           return $this->responseData($task);
       }
       return $this->responseError('task tidak ditemukan', 404);
    }

}
