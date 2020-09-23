<?php
namespace App\Repository\Comment;

use App\Models\Task;
use Illuminate\Http\Request;

class EloquentCommentRepository implements CommentRepository
{

    public function storeComment(Request $request, $task_id)
    {
        $task = Task::find($task_id);
        if ($task != null){
            $comment = $task->comments()->create([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return $comment;
        }
        return null;
    }
}
