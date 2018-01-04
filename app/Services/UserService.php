<?php
namespace App\Services;

use App\User;
use Illuminate\Http\Request;

class UserService{
    
    public function getAllUsers(){
        $users = User::all()->toArray();
        return response()->json($users);
    }

    public function createNewUser(Request $request){
        dd($request);
        $user = $request->all();
        User::create($user);
        return response()->json(['message' => 'user created'], 201);
    }

    public function updateUser($id, Request $request){
        $user = User::find($id);
        $data = $request->all();
        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->website = $data['website'];
        $user->company = $data['company']; 
        $user->save();
        return response()->json(['message' => 'user updated'], 200);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return response()->json(['message' => 'user deleted'], 204);
    }
}