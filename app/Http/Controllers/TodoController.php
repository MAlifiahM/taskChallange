<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Services\TodoService;

class TodoController extends Controller
{
    protected $todoService;

    public function __construct(TodoService $todoService){
        $this->todoService = $todoService;
    }

    public function todo(){
        return $this->todoService->todo();
    }

    public function index(){
        return $this->todoService->getAllTodos();
    }

    public function store(Request $request){
        return $this->todoService->createNewTodo($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->todoService->updateAllDatasTodo($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->todoService->updateSingleDataTodo($id, $request);
    }

    public function destroy($id){
        return $this->todoService->deleteTodo($id);
    }
}
