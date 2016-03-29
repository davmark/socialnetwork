<?php

namespace App\Services;
use Storage,Image, File;

class ProfileService {

    private $imgPath;

    public function __construct()
    {
        $this->imgPath      = public_path('users/imgs/');
        $this->imgThumbPath = public_path('users/imgs/thumbs/');

//        $this->imgPath      = 'users/imgs/';
//        $this->imgThumbPath = 'users/imgs/thumbs/';
    }

    public function uploadProfileImg($img,$user)
    {
        $imageName = $this->getImageName($img)['unique'];
        $oldName = $user->img;
        if(!$oldName){
            Image::make($img)->save($this->imgPath.$imageName);
            Image::make($img)->resize(50,50)->save($this->imgThumbPath.$imageName);
        }else{
            File::delete($this->imgPath.$oldName);
            File::delete($this->imgThumbPath.$oldName);

            Image::make($img)->save($this->imgPath.$imageName);
            Image::make($img)->resize(50,50)->save($this->imgThumbPath.$imageName);
        }

        return $user->update(['img'=>$imageName]);
    }

    private function getImageName($img)
    {
        $extansion = $img->getClientOriginalExtension();
        $original  = $img->getClientOriginalName();
        $unique = uniqid().'.'.$extansion;
        return
        [
            'original' =>$original,
            'unique'  =>$unique,
        ];
    }
}