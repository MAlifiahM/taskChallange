<?php
namespace App\Services;

use App\Album;
use Illuminate\Http\Request;

class AlbumService{
    
    public function getAllAlbums(){
        $albums = Album::all()->toArray();
        return response()->json($albums);
    }

    public function createNewAlbum(Request $request){
        $album = $request->all();
        $newAlbum = album::create($album);
        return response()->json([$newAlbum], 201);
    }

    public function updateAllDatasAlbum($id, Request $request){
        $album = Album::find($id);
        $data = $request->all();
        $album->userId = $data['userId'];
        $album->title = $data['title']; 
        $album->save();
        return response()->json([$album], 200);
    }

    public function updateSingleDataAlbum($id, Request $request){
        $album = Album::find($id)->fill(request()->all()); 
        $album->save();
        return response()->json([$album], 200);
    }

    public function deleteAlbum($id){
        $album = Album::find($id);
        $album->delete();
        return response(json_encode([], JSON_FORCE_OBJECT), 200);
    }
}