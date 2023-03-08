<?php

namespace App\Http\Controllers\Functions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\User;
use App\Models\Backend\LayoutModel;
use App\Models\Backend\ZoneModel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;


class FunctionControl extends Controller
{
    // Image Function
    protected $hostIP = "192.168.14.10";
    protected $hostPort = "50050";

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

    public function updateSource($source){
        $datas = ZoneModel::where('source', $source)->orderBy('frame_id','asc')->orderBy('output_id','asc')->get();
        $frame = [];
        $frame_id = 0;
        $output_id = 0;
        for($i = 0;$i < 40;$i++){
            array_push($frame, "00");
        }

        foreach ($datas as $row) {
            $temp = decbin(hexdec($frame[$row->frame_id][1]));
            $bin = sprintf("%04d", $temp);
            $bin[3 - $row->output_id] = '1';
            $string = strtoupper(dechex(bindec($bin)));
            $frame[$row->frame_id] = sprintf("%02s", $string);
        }

        if($source < 5){
            $source -= 1;
            $frame_id = '0001';
            $output_id = sprintf("%04d", $source);
        }
        else if ($source < 9){
            $source -= 5;
            $frame_id = '0002';
            $output_id = sprintf("%04d", $source);
        }
        else if ($source < 11){
            $source -= 9;
            $frame_id = '0003';
            $output_id = sprintf("%04d", $source);
        }
        else if ($source < 13){
            $source -= 11;
            $frame_id = '0004';
            $output_id = sprintf("%04d", $source);
        }
        else if ($source < 15){
            $source -= 13;
            $frame_id = '0005';
            $output_id = sprintf("%04d", $source);
        }
        else{
            $source -= 15;
            $frame_id = '0006';
            $output_id = sprintf("%04d", $source);
        }

        $hexcode = '11030000005E80000001' . $frame_id . $output_id;

        for($i = 0;$i < 40;$i++){
            $frame[$i] .= "00";
            $hexcode .= $frame[$i];
        }

        $data_hex = hex2bin($hexcode);
        $socket_create = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
        $socket_connect = socket_connect($socket_create, $this->hostIP, $this->hostPort) or die("Could not connect to server\n");
        if($socket_connect != 0)
        {
            $socket_write = socket_write($socket_create, $data_hex, strlen($data_hex)) or die("Could not send data to server\n");
            socket_close($socket_create);
            return $hexcode;
        }
        else{
            socket_close($socket_create);
            return false;
        }
    }

    public function selectSource(Request $request, $zone_id){
        try {
            DB::beginTransaction();
            $data = ZoneModel::find($zone_id);
            $old_source = $data->source;
            $data->source = $request->source;
            if($data->save()){
                if($request->source != 0){
                    if($old_source != 0){
                        $update = $this->updateSource($old_source);
                    }
                    else{
                        $update = 'None';
                    }

                    $datas = ZoneModel::where('source', $request->source)->orderBy('frame_id','asc')->orderBy('output_id','asc')->get();
                    $frame = [];
                    $frame_id = 0;
                    $output_id = 0;
                    for($i = 0;$i < 40;$i++){
                        array_push($frame, "00");
                    }

                    foreach ($datas as $row) {
                        $temp = decbin(hexdec($frame[$row->frame_id][1]));
                        $bin = sprintf("%04d", $temp);
                        $bin[3 - $row->output_id] = '1';
                        $string = strtoupper(dechex(bindec($bin)));
                        $frame[$row->frame_id] = sprintf("%02s", $string);
                    }

                    $source = $request->source;

                    if($source < 5){
                        $source -= 1;
                        $frame_id = '0001';
                        $output_id = sprintf("%04d", $source);
                    }
                    else if ($source < 9){
                        $source -= 5;
                        $frame_id = '0002';
                        $output_id = sprintf("%04d", $source);
                    }
                    else if ($source < 11){
                        $source -= 9;
                        $frame_id = '0003';
                        $output_id = sprintf("%04d", $source);
                    }
                    else if ($source < 13){
                        $source -= 11;
                        $frame_id = '0004';
                        $output_id = sprintf("%04d", $source);
                    }
                    else if ($source < 15){
                        $source -= 13;
                        $frame_id = '0005';
                        $output_id = sprintf("%04d", $source);
                    }
                    else{
                        $source -= 15;
                        $frame_id = '0006';
                        $output_id = sprintf("%04d", $source);
                    }

                    $hexcode = '11030000005E80000001' . $frame_id . $output_id;

                    for($i = 0;$i < 40;$i++){
                        $frame[$i] .= "00";
                        $hexcode .= $frame[$i];
                    }

                    $data_hex = hex2bin($hexcode);
                    $socket_create = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
                    $socket_connect = socket_connect($socket_create, $this->hostIP, $this->hostPort) or die("Could not connect to server\n");

                    if($socket_connect != 0)
                    {
                        $socket_write = socket_write($socket_create, $data_hex, strlen($data_hex)) or die("Could not send data to server\n");
                        socket_close($socket_create);
                        DB::commit();
                        return ['Old Source' => $update, 'New Source' => $hexcode];
                    }
                    else{
                        socket_close($socket_create);
                        DB::rollback();
                        return response()->json(['error' => 'Cannot update source'], 404);
                    }
                }
                else{
                    $update = $this->updateSource($old_source);
                    if($update){
                        DB::commit();
                        return ['Old Source' => $update];
                    }
                    else{
                        DB::rollback();
                        return response()->json(['error' => 'Cannot update source'], 404);
                    }
                }
            }
            else{
                DB::rollback();
                return response()->json(['error' => 'Cannot change source'], 404);
            }
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function adjustVolume(Request $request, $zone_id){
        try {
            DB::beginTransaction();
            $data = ZoneModel::find($zone_id);
            $data->volume = $request->volume;
            if($data->save()){
                $data = ZoneModel::find($zone_id);
                $frame_id = $data->frame_id;
                $output_id = $data->output_id;

                if($request->new_volume > -1){
                    $volume_data = "0000";
                }
                else{
                    $volume_data = strtoupper(substr(dechex($request->new_volume), -4));
                }

                if($frame_id > 15){
                    $frame_id_hex = "00" . strtoupper(dechex($frame_id));
                }
                else{
                    $frame_id_hex = "000" . strtoupper(dechex($frame_id));
                }

                $output_id_hex = "000" . strtoupper(dechex($output_id));

                $hexcode = "0908000000108000" . $frame_id_hex . $output_id_hex . '0001' . $volume_data;
                $data_hex = hex2bin($hexcode);
                $socket_create = socket_create(AF_INET, SOCK_STREAM, 0);
                $socket_connect = socket_connect($socket_create, $this->hostIP, $this->hostPort) or die("Could not connect to server\n");
                if($socket_connect != 0)
                {
                    $socket_write = socket_write($socket_create, $data_hex, strlen($data_hex)) or die("Could not send data to server\n");
                    socket_close($socket_create);
                    DB::commit();
                    // return response()->json(['success' => 'Change volume successfully'], 200);
                    return $hexcode;
                }
                else{
                    socket_close($socket_create);
                    DB::rollback();
                    return response()->json(['error' => 'Cannot change volume'], 404);
                }
        }
            else{
                DB::rollback();
                return response()->json(['error' => 'Cannot change volume'], 404);
            }
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }

    }

    public function save(){
        $data = "09FE000000088000";
        $data_hex = hex2bin($data);
        $socket_create = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
        $socket_connect = socket_connect($socket_create, $this->hostIP, $this->hostPort) or die("Could not connect to server\n");
        if($socket_connect != 0){
            $socket_write = socket_write($socket_create, $data_hex, strlen($data_hex)) or die("Could not send data to server\n");
            socket_close($socket_create);
            return true;
        }
        else{
            return false;
        }
    }

}
