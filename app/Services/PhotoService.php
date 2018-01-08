<?php
namespace App\Services;

use App\Photo;
use Illuminate\Http\Request;

class PhotoService{
    
    public function getAllPhotos(){
        $photos = Photo::all()->toArray();
        return response()->json($photos);
    }

    public function createNewPhoto(Request $request){
        $photo = $request->all();
        $newPhoto = photo::create($photo);
        return response()->json([$newPhoto], 201);
    }

    public function updateAllDatasPhoto($id, Request $request){
        $photo = Photo::find($id);
        $data = $request->all();
        $photo->albumId = $data['albumId'];
        $photo->title = $data['title'];
        $photo->url = $data['url'];
        $photo->thumbnailUrl = $data['thumbnailUrl'];        
        $photo->save();
        return response()->json([$photo], 200);
    }

    public function updateSingleDataPhoto($id, Request $request){
        $photo = Photo::find($id)->fill(request()->all()); 
        $photo->save();
        return response()->json([$photo], 200);
    }

    public function deletePhoto($id){
        $photo = Photo::find($id);
        $photo->delete();
    }
}