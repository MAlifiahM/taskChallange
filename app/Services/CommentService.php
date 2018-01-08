<?php
namespace App\Services;

use App\Comment;
use Illuminate\Http\Request;

class CommentService{
    
    public function getAllComments(){
        $comments = Comment::all()->toArray();
        return response()->json($comments);
    }

    public function createNewComment(Request $request){
        $comment = $request->all();
        $newComment = Comment::create($comment);
        return response()->json([$newComment], 201);
    }

    public function updateAllDatasComment($id, Request $request){
        $comment = Comment::find($id);
        $data = $request->all();
        $comment->postId = $data['postId'];
        $comment->name = $data['name'];
        $comment->email = $data['email'];        
        $comment->body = $data['body'];
        $comment->save();
        return response()->json([$comment], 200);
    }

    public function updateSingleDataComment($id, Request $request){
        $comment = Comment::find($id)->fill(request()->all()); 
        $comment->save();
        return response()->json([$comment], 200);
    }

    public function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return response(json_encode([], JSON_FORCE_OBJECT), 200);
    }
}