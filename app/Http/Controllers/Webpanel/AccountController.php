<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\SettingModel;
use App\Models\Backend\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Functions\FunctionControl;
use App\Models\Backend\PreRecordModel;

class AccountController extends Controller
{
    protected $prefix = 'backend';
    protected $name = 'manage-account';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datas = User::whereNotNull('id');

        if(!empty($_GET['order']) && $_GET['order'] == 'asc'){
            if(!empty($_GET['column']) && $_GET['column'] == 'fname'){
                $datas->orderBy('firstname', 'asc');
                echo 'A 1';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'lname'){
                $datas->orderBy('lastname', 'asc');
                echo 'A 2';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'uname'){
                $datas->orderBy('username', 'asc');
                echo 'A 3';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'role'){
                $datas->orderBy('role', 'asc');
                echo 'A 4';
            }
        }

        if(!empty($_GET['order']) && $_GET['order'] == 'desc'){
            if(!empty($_GET['column']) && $_GET['column'] == 'fname'){
                $datas->orderBy('firstname', 'desc');
                echo 'B 1';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'lname'){
                $datas->orderBy('lastname', 'desc');
                echo 'B 2';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'uname'){
                $datas->orderBy('username', 'desc');
                echo 'B 3';
            }
            if(!empty($_GET['column']) && $_GET['column'] == 'role'){
                $datas->orderBy('role', 'desc');
                echo 'B 4';
            }
        }

        $data = $datas->get();

        // dd($data);

        $project = SettingModel::first();
        $ptt = PreRecordModel::orderBy('id', 'asc')->get();
        return view("$this->prefix.$this->name", [
            'datas' => $data,
            'project' => $project,
            'ptt' => $ptt,
        ]);
    }

    public function insert(Request $request, $id = null)
    {
        return $this->store($request, $id = null);
    }

    public function update(Request $request, $id)
    {
        return $this->store($request, $id);
    }

    public function store(Request $request, $id = null)
    {
        // dd($request);
        try {
            DB::beginTransaction();
            if ($id == null) {
                $data = new User();
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
                $password = bcrypt($request->password);
                $data->password = $password;

            } else {
                $data = User::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
                if($request->password != ''){
                    $password = bcrypt($request->password);
                    $data->password = $password;
                }
            }

            $data->role = $request->role;
            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->username = $request->username;

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

    public function destroy(Request $request)
    {
        $query = User::destroy($request->id);

        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
}
