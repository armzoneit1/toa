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

    public function get_zone1($id){
        $zone = ZoneModel::find($id);
        return $zone;
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
