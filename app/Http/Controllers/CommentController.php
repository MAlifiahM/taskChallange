<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Services\CommentService;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService){
        $this->commentService = $commentService;
    }

    public function comment(){
        return $this->commentService->comment();
    }

    public function index(){
        return $this->commentService->getAllComments();
    }

    public function store(Request $request){
        return $this->commentService->createNewComment($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->commentService->updateAllDatasComment($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->commentService->updateSingleDataComment($id, $request);
    }

    public function destroy($id){
        return $this->commentService->deleteComment($id);
    }
}
