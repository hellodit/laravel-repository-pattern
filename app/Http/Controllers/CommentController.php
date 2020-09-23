<?php

namespace App\Http\Controllers;

use App\Repository\Comment\EloquentCommentRepository;
use App\Utils\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    use Response;
    protected $eloquentComment;

    public function __construct(EloquentCommentRepository $eloquentCommentRepository) {
        $this->eloquentComment = $eloquentCommentRepository;
    }

    public function storeComment(Request $request, $task_id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->responseValidation($validator->errors());
        }

        $comment = $this->eloquentComment->storeComment($request, $task_id);
        if (!empty($comment)){
            return $this->responseData($comment, "Data berhasil ditambahkan");
        }
        return $this->responseError();

    }
}
