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
        $newPost = Post::create($post);
        return response()->json([$newPost], 201);
    }

    public function updateAllDatasPost($id, Request $request){
        $post = Post::find($id);
        $data = $request->all();
        $post->userId = $data['userId'];
        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->save();
        return response()->json([$post], 200);
    }

    public function updateSingleDataPost($id, Request $request){
        $post = Post::find($id)->fill(request()->all()); 
        $post->save();
        return response()->json([$post], 200);
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return response(json_encode([], JSON_FORCE_OBJECT), 200);
    }
}