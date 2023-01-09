<?php

namespace App\Http\Controllers\Functions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;


class FunctionControl extends Controller
{
    // Image Function

    public static function upload_image($image_file,$folder,$x,$y)
    {
        $filename = "$folder" . date('dmY-His');
        $file = $image_file;
        if ($file) 
        {
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            $lg->resize($x,$y)->stream();
            $newLG = 'upload/'.$folder.'/' . $filename . '.' . $ext;
            $store = Storage::disk('public')->put($newLG, $lg);
            if($store)
            {
                return $newLG;
            }
        }
    }
    public static function upload_image2($image_file,$folder)
    {
        if(str_contains($folder, '/')){
            $name = str_replace('/', '-', $folder);
            $filename = "$name" . date('dmY-His');
        }
        else{
            $filename = "$folder" . date('dmY-His');
        }
        
        $file = $image_file;
        if ($file) 
        {
            $lg = Image::make($file->getRealPath());
            $ext = explode("/", $lg->mime())[1];
            // dd($image_file);
            $height = Image::make($file)->height();
            $width = Image::make($file)->width();
            $lg->resize($width, $height)->stream();
            $newLG = 'upload/'.$folder.'/' . $filename . '.' . $ext;
            // dd($image_file);
            $store = Storage::disk('public')->put($newLG, $lg);
            if($store)
            {
                return $newLG;
            }
        }
    }

    public static function upload_file($file,$folder)
    {
        if ($file) {

            $ext = $file->getClientOriginalExtension();
            $filename = "$folder" . date('dmY-His') . '.' . $ext;            
            $newLG = 'upload/'.$folder.'/';
            $store = $file->move(public_path($newLG),$filename);
            if($store)
            {
                return $newLG.$filename;
            }

        }
    }

    public static function delete_file($filename)
    {
        if ($filename) {
            $delete = Storage::disk('public')->delete($filename);
            // dd($delete);
            return $delete;
        }
    }


}
