<?php
namespace App\Services;

use App\Todo;
use Illuminate\Http\Request;

class TodoService{
    
    public function getAllTodos(){
        $todos = Todo::all()->toArray();
        return response()->json($todos);
    }

    public function createNewTodo(Request $request){
        $todo = $request->all();
        $newTodo = Todo::create($todo);
        return response()->json([$newTodo], 201);
    }

    public function updateAllDatasTodo($id, Request $request){
        $todo = Todo::find($id);
        $data = $request->all();
        $todo->userId = $data['userId'];
        $todo->title = $data['title'];
        $todo->completed = $data['completed'];
        $todo->save();
        return response()->json([$todo], 200);
    }

    public function updateSingleDataTodo($id, Request $request){
        $todo = Todo::find($id)->fill(request()->all()); 
        $todo->save();
        return response()->json([$todo], 200);
    }

    public function deleteTodo($id){
        $todo = Todo::find($id);
        $todo->delete();
        return response(json_encode([], JSON_FORCE_OBJECT), 200);
    }
}