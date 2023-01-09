<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\PreRecordModel;
use App\Models\Backend\PreRecordRepeatModel;
use App\Models\Backend\TaskRepeatModel;
use App\Models\Backend\DayRepeatModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Functions\FunctionControl;
use App\Models\Backend\SettingModel;
use App\Models\UserRecordModel;

class RecordController extends Controller
{
    protected $prefix = 'backend';
    protected $name = 'pre-record';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = SettingModel::first();
        $ptt = PreRecordModel::orderBy('id', 'asc')->get();
        // dd($datas);
        return view("$this->prefix.$this->name", [
            'ptt' => $ptt,
            'project' => $project,
        ]);
    }

    public function recordData(Request $request){
        $datas = PreRecordModel::orderBy('id', 'asc')->get();
        return $datas;
    }

    public function latestRecord(Request $request){
        $data = PreRecordModel::orderBy('id', 'desc')->first();
        return $data;
    }

    public function getUpdateRecord(Request $request,$id){
        $data = PreRecordModel::find($id);
        return $data;
    }

    public function recordRepeat(Request $request, $id){
        $repeat = PreRecordRepeatModel::where('record_id', $id)->orderBy('repeat_id','asc')->orderBy('day_id','asc')->get();
        return $repeat;
    }

    public function taskRepeat(Request $request, $id){
        $repeat = TaskRepeatModel::find($id);
        return $repeat;
    }

    public function taskDay(Request $request, $id){
        $day = DayRepeatModel::find($id);
        return $day;
    }

    public function taskActive(Request $request,$id){
        // dd($request);
        try {
            DB::beginTransaction();
            $data = PreRecordModel::find($id);
            $data->task_active = $request->active;
            if($data->save()){
                DB::commit();
                $array = [];
                $record = PreRecordModel::orderBy('id','asc')->get();
                foreach($record as $row){
                    array_push($array,[$row->id, $row->task_active]);
                }
                return $array;
            }
            else{
                return response()->json(['error' => 'Cannot active '. $id .' record'], 404);
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function insert(Request $request, $id = null){
        return $this->store($request, $id = null);
    }

    public function update(Request $request, $id){
        return $this->store($request, $id);
    }

    public function store(Request $request, $id = null)
    {
        try {
            DB::beginTransaction();
            if ($id == null) {
                $data = new PreRecordModel();
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
            }
            else{
                $data = PreRecordModel::find($id);
                PreRecordRepeatModel::where('record_id', $id)->delete();
                $data->updated_at = date('Y-m-d H:i:s');
            }

            if($request->file != ''){
                $file = FunctionControl::upload_file($request->file,'pre-record');
                $data->file = $file;
            }
            
            $data->task_name  = $request->task_name;
            $data->task_start = $request->task_start;

            if($request->task_duration != ''){
                $data->task_duration = $request->task_duration;
                $data->task_end = $request->task_end;
            }
            else{
                $data->task_duration = null;
                $data->task_end = null;
            }

            if($request->task_repeat == "1"){
                $data->task_date  = $request->task_date;
                $data->task_repeat = "Specified";
                $loop = '';
                if($request->task_loop_repeat == ''){
                    $data->task_loop = 'Only Once';
                }
                else{               
                    foreach($request->task_loop_repeat as $key => $repeat){
                        if($key != count($request->task_loop_repeat)-1){
                            $loop .= $repeat . ' , ';
                        }
                        else{
                            $loop .= $repeat;
                        }                   
                    }
                    $data->task_loop = $loop;   
                }       
                // $data->save();
                // foreach($request->task_repeat as $row){
                //     $repeat = new PreRecordRepeatModel();
                //     $repeat->record_id = $data->id;
                //     $repeat->repeat_id = $row;
                //     $repeat->created_at = date('Y-m-d H:i:s');
                //     $repeat->updated_at = date('Y-m-d H:i:s');
                //     $repeat->save();
                // }
            }

            else{
                $data->task_repeat = "Weekly";
                $data->task_date  = null;
                $loop = '';
                if(count($request->task_loop_day) == 7){
                    $loop .= "Every Day";
                }
                else{
                    foreach($request->task_loop_day as $key => $day){
                        if($key != count($request->task_loop_day)-1){
                            $loop .= $day . ' , ';
                        }
                        else{
                            $loop .= $day;
                        }                   
                    }
                }                
                $data->task_loop = $loop;
                // $data->save();
                // foreach($request->task_day as $row){
                //     $day = new PreRecordRepeatModel();
                //     $day->record_id = $data->id;
                //     $day->day_id = $row;
                //     $day->created_at = date('Y-m-d H:i:s');
                //     $day->updated_at = date('Y-m-d H:i:s');
                //     $day->save();
                // }
            }
            $data->save();
            if ($data->save()) {
                DB::commit();
                // return back()->with("Success", "Submit Successfully");
                return response()->json(["Success" => "Submit Successfully"]);
                // return view("alert.success", ['url' => url("webpanel/$this->name")]);
            } else {
                // return back()->with("Error", "Failed to submit");
                return response()->json(['Error' => 'Failed to submit']);
                // return view("alert.error", ['url' => url("webpanel/$this->name")]);
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function destroy(Request $request)
    {
        $data = PreRecordModel::find($request->id);
        $remove_file = FunctionControl::delete_file($data->file);

        if($remove_file){
           $query = PreRecordModel::destroy($request->id);
        }

        if (@$query) {
            return true;
        } else {
            return false;
        }
    }
}
