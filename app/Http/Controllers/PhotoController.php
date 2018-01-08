<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Services\PhotoService;

class PhotoController extends Controller
{
    protected $photoService;

    public function __construct(PhotoService $photoService){
        $this->photoService = $photoService;
    }

    public function photo(){
        return $this->photoService->photo();
    }

    public function index(){
        return $this->photoService->getAllPhotos();
    }

    public function store(Request $request){
        return $this->photoService->createNewPhoto($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->photoService->updateAllDatasPhoto($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->photoService->updateSingleDataPhoto($id, $request);
    }

    public function destroy($id){
        return $this->photoService->deletePhoto($id);
    }
}
