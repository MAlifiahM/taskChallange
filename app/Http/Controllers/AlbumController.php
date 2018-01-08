<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Services\AlbumService;

class AlbumController extends Controller
{
    protected $albumService;

    public function __construct(AlbumService $albumService){
        $this->albumService = $albumService;
    }

    public function album(){
        return $this->albumService->album();
    }

    public function index(){
        return $this->albumService->getAllAlbums();
    }

    public function store(Request $request){
        return $this->albumService->createNewAlbum($request);
    }

    public function updateAllDatas($id, Request $request){
        return $this->albumService->updateAllDatasAlbum($id, $request);
    }

    public function updateSingleData($id, Request $request){
        return $this->albumService->updateSingleDataAlbum($id, $request);
    }

    public function destroy($id){
        return $this->albumService->deleteAlbum($id);
    }
}
