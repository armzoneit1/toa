<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\LayoutModel;
use App\Models\Backend\SettingModel;
use App\Models\Backend\ZoneModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Functions\FunctionControl;
use Facade\FlareClient\Http\Response;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\Backend\PreRecordModel;

class LayoutPlanController extends Controller
{
    protected $prefix = 'backend';
    protected $name = 'layout-plan';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = SettingModel::first();
        $id = LayoutModel::pluck('id')->first();
        $layout = LayoutModel::orderBy('id', 'asc')->get();
        $ptt = PreRecordModel::orderBy('id', 'asc')->get();
        return view("$this->prefix.layout-plan", [
            'project' => $project,
            'layout' => $layout,
            'id' => $id,
            'ptt' => $ptt,
        ]);
    }

    public function get_image($id){
        $image = LayoutModel::where('id',$id)->first();
        return $image;
    }

    public function get_zone($id){
        $zone = ZoneModel::where('layout_id',$id)->get();

        $ipconfig = shell_exec('ipconfig');
        preg_match_all('/IPv4 Address[.\s]+:\s+(\d+\.\d+\.\d+\.\d+)/', $ipconfig, $matches);
        // dd($matches);
        if(!empty($matches[0])){
            $ipAddress = array_shift($matches[0]);
            $ipAddress = str_replace("IPv4 Address. . . . . . . . . . . :","",$ipAddress);
            $ipAddress = trim($ipAddress);
        }

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = "https://";
        } else {
            $protocol = "http://";
        }
        $url = $protocol . $ipAddress;

        foreach ($zone as $key => $value) {
            $zone[$key]['url'] = $url."/toa/zone/$value->id";
        }
        return $zone;
    }

    public function insert_layout(Request $request, $id = null)
    {
        return $this->store_layout($request, $id = null);
    }

    public function update_layout(Request $request, $id)
    {
        return $this->store_layout($request, $id);
    }

    public function store_layout(Request $request, $id = null)
    {
        // dd($request->image);
        try {
            DB::beginTransaction();
            if ($id == null) {
                $data = new LayoutModel();
                $image = FunctionControl::upload_image2($request->image,'layout');
                $data->image = $image;
                $imgsize = getimagesize($request->image);
                $data->height = (856 / $imgsize[0]) * $imgsize[1];
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
            } else {
                $data = LayoutModel::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
                if($request->image != ''){
                    FunctionControl::delete_file($data->image);
                    $image = FunctionControl::upload_image2($request->image,'layout');
                    $data->image = $image;
                    $imgsize = getimagesize($request->image);
                    $data->height = (856 / $imgsize[0]) * $imgsize[1];
                }
            }

            $data->name = $request->name;

            if ($data->save()) {
                DB::commit();
                return back()->with("Success", "Submit Successfully");
            } else {
                return back()->with('Error', 'Failed to submit');
            }
        } catch (\Exception $e) {
            dd($e);
            $error_log = $e->getMessage();
            $error_line = $e->getLine();
            $type_log = 'backend';
            $error_url = url()->current();
            $log_id = LogsController::save_logbackend($type_log, $error_log, $error_line, $error_url);

            return view("alert.alert", [
                'url' => $error_url,
                'title' => "เกิดข้อผิดพลาดทางโปรแกรม",
                'text' => "กรุณาแจ้งรหัส Code : $log_id ให้ทางผู้พัฒนาโปรแกรม ",
                'icon' => 'error'
            ]);
        }
    }

    public function check_duplicate(Request $request, $id = null){
        if($id == null){
            $zone = ZoneModel::get();
            foreach ($zone as $value) {
                if($value->frame_id == $request->frame_id && $value->output_id == $request->output_id){
                    return response()->json(["success" => false, "error" => "Frame ID and Output ID are duplicate"]);
                }
            }
        }
        else{
            $zone = ZoneModel::where('id','!=',$id)->get();
            foreach ($zone as $value) {
                if($value->frame_id == $request->frame_id && $value->output_id == $request->output_id){
                    return response()->json(["success" => false, "error" => "Frame ID and Output ID are duplicate"]);
                }
            }
        }
        return response()->json(["success" => true , "error" => false]);
    }

    public function insert_zone(Request $request, $layout_id, $id = null)
    {
        return $this->store_zone($request, $layout_id, $id = null);
    }

    public function update_zone(Request $request, $layout_id, $id)
    {
        return $this->store_zone($request, $layout_id, $id);
    }

    public function store_zone(Request $request, $layout_id, $id = null)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            $layout = LayoutModel::where('id',$layout_id)->pluck('name')->first();
            $layout_name = str_replace(" ","_",$layout);

            if ($id == null) {
                $data = new ZoneModel();
                $folder = "zone/$layout_name";
                $image = FunctionControl::upload_image2($request->image, $folder);
                $data->image = $image;
                $data->layout_id = $layout_id;
                $data->x_value = $request->x_value;
                $data->y_value = $request->y_value;
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
            } else {
                $data = ZoneModel::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
                if($request->image != ''){
                    FunctionControl::delete_file($data->image);
                    $folder = "zone/$layout_name";
                    $image = FunctionControl::upload_image2($request->image, $folder);
                    $data->image = $image;
                }
            }

            $data->frame_id = $request->frame_id;
            $data->output_id = $request->output_id;
            $data->name = $request->name;
            $data->color = $request->color;

            if ($data->save()) {
                DB::commit();
                return back()->with("Success", "Submit Successfully");
                // return response()->json(["Success" => "Submit Successfully"], 200);
                // return view("alert.success", ['url' => url("webpanel/$this->name")]);
            } else {
                // return response()->json(["Error" => "Failed to submit"], 200);
                return back()->with('Error', 'Failed to submit');
                // return view("alert.error", ['url' => url("webpanel/$this->name")]);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy_layout(Request $request)
    {
        $zone = ZoneModel::where('layout_id',$request->id)->get();
        if(@$zone){
            foreach($zone as $row){
                $remove = ZoneModel::destroy($row->id);
            }
        }

        //Remove entire folder
        $layout = LayoutModel::find($request->id);
        $layout_name = str_replace("_"," ",$layout->name);
        $directory = "upload/zone/$layout_name";
        \File::deleteDirectory(public_path($directory));
        //Remove data in database
        FunctionControl::delete_file($layout->image);
        $query = LayoutModel::destroy($request->id);

        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function destroy_zone(Request $request)
    {
        $zone = ZoneModel::where('id',$request->id)->first();
        FunctionControl::delete_file($zone->image);
        $query = ZoneModel::destroy($request->id);

        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
}
