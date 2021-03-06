<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function user(){
        return $this->userService->user();
    }

    public function index(){
        return $this->userService->getAllUsers();
    }

    public function store(Request $request){
        return $this->userService->createNewUser($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->userService->updateAllDatasUser($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->userService->updateSingleDataUser($id, $request);
    }

    public function destroy($id){
        return $this->userService->deleteUser($id);
    }
}
