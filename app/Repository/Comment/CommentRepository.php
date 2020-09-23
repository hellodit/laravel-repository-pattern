<?php


namespace App\Repository\Comment;


use App\Models\Task;
use Illuminate\Http\Request;

interface CommentRepository
{
    public function storeComment(Request $request, $task_id);
}
