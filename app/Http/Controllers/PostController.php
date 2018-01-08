<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService){
        $this->postService = $postService;
    }

    public function post(){
        return $this->postService->post();
    }

    public function index(){
        return $this->postService->getAllPosts();
    }

    public function store(Request $request){
        return $this->postService->createNewPost($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->postService->updateAllDatasPost($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->postService->updateSingleDataPost($id, $request);
    }

    public function destroy($id){
        return $this->postService->deletePost($id);
    }
}
