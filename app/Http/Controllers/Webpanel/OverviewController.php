<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\SettingModel;
use App\Models\Backend\LayoutModel;
use App\Models\Backend\ZoneModel;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\PreRecordModel;
use function GuzzleHttp\Promise\all;

class OverviewController extends Controller
{
    protected $prefix = 'backend';
    protected $hostIP = "192.168.14.10";
    protected $hostPort = "50050";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layout = LayoutModel::orderBy('id','asc')->get();
        $project = SettingModel::first();
        $zone = ZoneModel::orderBy('id','asc')->get();
        $ptt = PreRecordModel::orderBy('id', 'asc')->get();
        return view("$this->prefix.overview", [
            'layout' => $layout,
            'project' => $project,
            'zone' => $zone,
            'ptt' => $ptt,
        ]);
    }

    public function get_layout($id){
        $layout = LayoutModel::where('id',$id)->first();
        return $layout;
    }

    public function get_zone($id){
        $zone = ZoneModel::where('layout_id',$id)->get();
        return $zone;
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

    public function songStatus(Request $request, $id){
        $curl1 = curl_init();

        curl_setopt_array($curl1, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$request->source."&controltype=get_status_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: fe033db8-fc32-cfc8-8a1a-88f3f026e669"
            ),
        ));

        $response = json_decode(curl_exec($curl1));
        $err = curl_error($curl1);

        curl_close($curl1);
        if($response == "Play"){
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_PORT => "83",
                CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$request->source."&controltype=pause_control_music",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "postman-token: 31dc42b8-a787-999c-c478-388299841fdf"
                ),
            ));

            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);

            curl_close($curl);

            return true;
        }else{
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_PORT => "83",
                CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$request->source."&controltype=play_control_music",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache",
                    "postman-token: d6979142-e65d-f02c-4c72-36709e4e99af"
                ),
            ));

            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);

            curl_close($curl);

            return true;
        }

    }

    public function getplayandpause(Request $request,$id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$id."&controltype=get_status_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: fe033db8-fc32-cfc8-8a1a-88f3f026e669"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        return $response;
    }

    public function forwardmusic(Request $request,$id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$id."&controltype=forward_control_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: cd2a5e81-6206-7b4e-f547-aacddaaaf586"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        return true;
    }
    public function backwardmusic(Request $request,$id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$id."&controltype=backward_control_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: dbc8dfaf-9aad-316b-e62d-9a31f9bf5f00"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);

        return true;
    }

    public function musicrunnow(Request $request ,$id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$id."&controltype=play_list_music",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 9c3273e6-ed68-ea45-c8de-5ad888fa9bbb"
            ),
        ));

        $response = json_decode(curl_exec($curl));
        $err = curl_error($curl);

        curl_close($curl);
        return $response;
    }
}
