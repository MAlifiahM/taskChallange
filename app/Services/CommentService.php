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
        Comment::create($comment);
        return response()->json(['message' => 'comment created'], 201);
    }

    public function updateComment($id, Request $request){
        $comment = Comment::find($id);
        $data = $request->all();
        $comment->postId = $data['postId'];
        $comment->name = $data['name'];
        $comment->email = $data['email'];        
        $comment->body = $data['body'];
        $comment->save();
        return response()->json(['message' => 'comment updated'], 200);
    }

    public function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json(['message' => 'comment deleted'], 204);
    }
}