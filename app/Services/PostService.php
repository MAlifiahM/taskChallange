<?php
namespace App\Services;

use App\Post;
use Illuminate\Http\Request;

class PostService{
    
    public function getAllPosts(){
        $posts = Post::all()->toArray();
        return response()->json($posts);
    }

    public function createNewPost(Request $request){
        $post = $request->all();
        Post::create($post);
        return response()->json(['message' => 'post created'], 201);
    }

    public function updatePost($id, Request $request){
        $post = Post::find($id);
        $data = $request->all();
        $post->userId = $data['userId'];
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return response()->json(['message' => 'post updated'], 200);
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return response()->json(['message' => 'post deleted'], 204);
    }
}