<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Functions\FunctionControl;
use App\Models\Backend\SettingModel;
use Artisan;
use App\Models\UserRecordModel;

class SetController extends Controller
{
    protected $prefix = 'backend';
    protected $name = 'setname';

    public function store(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            $data = SettingModel::find($id);
            $data->updated_at = date('Y-m-d H:i:s');
            $data->name = $request->name;
            
            if ($data->save()) {
                DB::commit();
                return back()->with("Success", "Submit Successfully");
            } else {
                return back()->with('Error', 'Failed to submit');
            }
        } catch (\Exception $e) {           
        }
    }

    public function change_theme(){
        $theme = Auth::user()->theme;
        if($theme == 'B'){
            $data['theme'] = 'W';
            DB::Table('users')->where('id',Auth::user()->id)->update($data);
        }else{
            $data['theme'] = 'B';
            DB::Table('users')->where('id',Auth::user()->id)->update($data);
        }
        Artisan::call('cache:clear');
        echo 'Success';
    }

    public function emergency(Request $request){
        $emergency = UserRecordModel::orderBy('id', 'desc')->first();
        return $emergency;
    }

    public function deleteEmergency(Request $request,$id){
        $emergency = UserRecordModel::find($id);
        $remove_file = FunctionControl::delete_file($emergency->file);
        if($remove_file) {
            $query = UserRecordModel::destroy($id);
        }
        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
}
