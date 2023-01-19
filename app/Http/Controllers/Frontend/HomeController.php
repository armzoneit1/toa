<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Webpanel\LogsController;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Backend\LayoutModel;
use App\Models\Backend\ZoneModel;
use App\Models\Backend\PreRecordModel;
use App\Models\Backend\SettingModel;
use App\Models\UserRecordModel;
use App\Http\Controllers\Functions\FunctionControl;

//=== Model Backend ===


//=====================

class HomeController extends Controller
{
    protected $prefix = 'frontend';
    protected $hostIP = "192.168.14.10";
    protected $hostPort = "50050";

    public function setLang(Request $request)
	{
		$lang = Session::get('lang');
        $referrer =  $request->headers->get('referer');
        Session::put('lang',$request->lang);
        $newReferer = str_replace('/'.$lang,'/'.$request->lang, $referrer);

        return redirect()->intended($newReferer);
	}

    // public function index(Request $request)
    // {
    //     return view("$this->prefix.index",[
    //         'prefix' => $this->prefix,
    //     ]);
    // }

    public function home(Request $request)
    {
        $layout = LayoutModel::first();
        $project = SettingModel::pluck('name')->first();
        // dd($datas);
        return view("$this->prefix.overview",[
            'prefix' => $this->prefix,
            'layout' => $layout,
            'project' => $project,
        ]);
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

    public function overview(Request $request)
    {
        $layout = LayoutModel::orderBy('id', 'asc')->get();
        $id = LayoutModel::pluck('id')->first();
        $project = SettingModel::pluck('name')->first();
        $zone = ZoneModel::orderBy('id', 'asc')->get();
        // dd($datas);
        return view("$this->prefix.overview-mb",[
            'prefix' => $this->prefix,
            'layout' => $layout,
            'id' => $id,
            'project' => $project,
            'zone' => $zone,
        ]);
    }

    public function getImg(Request $request, $id)
    {
        $layout = LayoutModel::where('id', $id)->pluck('image');
        return $layout;
    }

    public function getZone(Request $request, $id)
    {
        $zone = ZoneModel::where('layout_id', $id)->get();
        return $zone;
    }

    public function getZoneById(Request $request, $id){
        $zone = ZoneModel::find($id);
        return $zone;
    }

    public function checkHome(Request $request){
        $layout = LayoutModel::first();
        $zone = ZoneModel::where('layout_id', $layout->id)->get();
        return ['layout' => $layout, 'zone' => $zone];
    }

    public function checkNewComing(Request $request){
        $layout = LayoutModel::get();
        $zone = ZoneModel::get();
        return ['layout' => $layout, 'zone' => $zone];
    }

    public function tempAudio(Request $request){
        $file = FunctionControl::upload_file($request->file,'temp-user-record');
        return $file;
    }

    public function zone(Request $request, $id)
    {
        // dd($request->session()->get('qrcode_zone'));
        $project = SettingModel::pluck('name')->first();
        $zone = ZoneModel::where('id', $id)->first();
        return view("$this->prefix.zone",[
            'prefix' => $this->prefix,
            'zone' => $zone,
            'project' => $project,
            'request' => $request,
        ]);
    }

    public function push_to_talk(Request $request)
    {
        $project = SettingModel::pluck('name')->first();
        return view("$this->prefix.push-to-talk",[
            'prefix' => $this->prefix,
            'project' => $project,
        ]);
    }

    public function record(Request $request){
        // dd($request);
        try {
            DB::beginTransaction();
            $data = new UserRecordModel();

            $data->username = $request->session()->get('username', null);
            $data->date = date('Y-m-d H:i:s');
            $data->length = $request->length;

            if($request->file != ''){
                $file = FunctionControl::upload_file($request->file,'user-record');
                $data->file = $file;
            }

            if($data->save()){
                DB::commit();
                return back()->with(['success' => 'User Record successfully']);
            }
            else{
                return back()->with(['error' => 'Cannot Record']);
            }
        } catch (\Exception $e) {
            dd($e);
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
                    $result17 = socket_write($socket_create, $data_hex, strlen($data_hex)) or die("Could not send data to server\n");
                    socket_close($socket_create);
                    DB::commit();
                    return response()->json(['success' => 'Change volume successfully'], 200);
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

    public function getplayandpause(Request $request,$id,$source)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$source."&controltype=get_status_music",
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

    public function forwardmusic(Request $request,$id,$source)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$source."&controltype=forward_control_music",
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
    public function backwardmusic(Request $request,$id,$source)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=".$source."&controltype=backward_control_music",
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

    public function musicrunnow(Request $request ,$id,$source)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_PORT => "83",
            CURLOPT_URL => "http://127.0.0.1:83/GetReponsePlayList?PlayerID=1&controltype=play_list_music",
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

    public function check_recordfire(){
        $check_date = date('Y-m-d', strtotime('-7 days'));
        $record_outkeep = UserRecordModel::where('date','<',$check_date)->get();
        if(!empty($record_outkeep)){
            foreach ($record_outkeep as $key => $_outkeep) {
                @Storage::disk('public')->delete($_outkeep->file);
            }
        }
        UserRecordModel::where('date','<',$check_date)->delete();
        return 'success';
        // dd($check_date , $record_outlist);
    }
}
