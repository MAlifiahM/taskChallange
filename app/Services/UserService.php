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
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $newUser = User::create($user);
        return response()->json([$newUser], 201);
    }

    public function updateAllDatasUser($id, Request $request){
        $user = User::find($id);
        $data = $request->all();
        $user->name = $data['name'];
        $user->password = $data['password'] = bcrypt($request->password);
        $user->username = $data['username'];
        $user->email = $data['email'];
        $user->address = $data['address'];
        $user->website = $data['website'];
        $user->company = $data['company']; 
        $user->save();
        return response()->json([$user], 200);
    }

    public function updateSingleDataUser($id, Request $request){
        $user = User::find($id)->fill(request()->all()); 
        $user['password'] = bcrypt($request->password); 
        $user->save();
        return response()->json([$user], 200);
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
    }
}