<?php

namespace App\Http\Controllers\Webpanel;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Functions\MenuControl;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Webpanel\LogsController;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Functions\FunctionControl;
use App\Models\Backend\SettingModel;
use App\Models\Backend\ModelModel;
use Artisan;

class SettingController extends Controller
{
    protected $prefix = 'backend';
    protected $segment = 'webpanel';
    protected $controller = 'setting';
    protected $folder = 'setting';
    protected $menu_id = '4';
    protected $name_page = "รายการตั้งค่า";

    public function datatable(Request $request)
    {
        $like= $request->Like;
        $sTable =SettingModel::orderby('id', 'asc')
            ->when($like, function ($query) use ($like) {
                if (@$like['search_choice'] != "") 
                {
                    if(@$like['search_type'] == "like")
                    {
                        $query->where(@$like['search_choice'], 'like', '%' . @$like['search_keyword'] . '%');
                    }
                    else
                    {
                        $query->where(@$like['search_choice'], @$like['search_type'], @$like['search_keyword']);
                    }
                }
            })
            ->get();
        return Datatables::of($sTable)
            ->addIndexColumn()
            ->editColumn('image', function ($row) {
                return '<img src="'. asset($row->image) .'" alt="" height="200">';
            })
            ->editColumn('status', function ($row) {
                $status = "";
                if($row->status == "on")
                {
                    $status = "checked";
                }
                $data = "<div class='form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0'>
                            <input id='status_change_$row->id' data-id='$row->id' onclick='status($row->id);' class='show-code form-check-input mr-0 ml-3' type='checkbox' $status>
                        </div>";
                return $data;
            })
            ->addColumn('created_at', function ($row) {
                $data = date('d/m/Y', strtotime('+543 Years', strtotime($row->created_at)));
                return $data;
            })
            ->addColumn('action', function ($row) {
                return "                                     
                <a href='$this->segment/$this->folder/edit/$row->id' class='mr-3 btn btn-sm btn-info' title='Edit'><i class='fa fa-edit w-4 h-4 mr-1'></i> Edit </a>                                                 
                <a href='javascript:' class='btn btn-sm btn-danger' onclick='deleteItem($row->id)' title='Delete'><i class='far fa-trash-alt w-4 h-4 mr-1'></i> Delete</a>
            ";
            })
            ->rawColumns(['image',  'created_at', 'action'])
            ->make(true);
    }

    public function datatable_detail(Request $request,$id)
    {
        $like= $request->Like;
        $sTable = DB::table('tb_zone')->where('layout_id', $id)->orderby('id', 'asc')
            ->when($like, function ($query) use ($like) {
                if (@$like['search_choice'] != "") 
                {
                    if(@$like['search_type'] == "like")
                    {
                        $query->where(@$like['search_choice'], 'like', '%' . @$like['search_keyword'] . '%');
                    }
                    else
                    {
                        $query->where(@$like['search_choice'], @$like['search_type'], @$like['search_keyword']);
                    }
                }
            })
            ->get();
        return Datatables::of($sTable)
            ->addIndexColumn()
            ->editColumn('image', function ($row) {
                return '<img src="'. asset($row->image) .'" alt="" height="200">';
            })
            ->addColumn('created_at', function ($row) {
                $data = date('d/m/Y', strtotime('+543 Years', strtotime($row->created_at)));
                return $data;
            })
            ->addColumn('action', function ($row) {
                return "                                       
                <a href='$this->segment/$this->folder/edit/$row->id' class='mr-3 btn btn-sm btn-info' title='Edit'><i class='fa fa-edit w-4 h-4 mr-1'></i> Edit </a>                                                 
                <a href='javascript:' class='btn btn-sm btn-danger' onclick='deleteItem($row->id)' title='Delete'><i class='far fa-trash-alt w-4 h-4 mr-1'></i> Delete</a>
            ";
            })
            ->rawColumns(['image', 'created_at', 'action'])
            ->make(true);
    }

    public function index(Request $request)
    {
        $navs = [
            '0' => ['url' => "$this->segment/$this->folder", 'name' => "หน้าจัดการ Setting", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.index", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'navs' => $navs,
        ]);
    }
    
    public function view(Request $request,$id)
    {
        $data = SettingModel::find($id);
        // $data = DB::table('tb_zone')->where('layout_id', $layout_id)->get();
        // $data2 = ModelModel::where(['product_id'=>$id])->get();
        $navs = [
            '0' => ['url' => "$this->segment/$this->folder", 'name' => "หน้าจัดการ Setting", "last" => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "ดู Setting", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.view", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'navs' => $navs,
            'row' => $data,
            // 'data' => $data2,
            // 'count_model' => $data2->count(),
            // 'count_model_list' => ModellistModel::where('product_id',$id)->count(),
        ]);
    }

    public function add(Request $request)
    {
        $navs = [
            '0' => ['url' => "$this->segment/$this->folder", 'name' => "หน้าจัดการ Setting", "last" => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "เพิ่ม Setting", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.add", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'navs' => $navs,
        ]);
    }



    public function edit(Request $request, $id)
    {
        $data = SettingModel::find($id);
        // $lists = ZoneModel::where('layout_id',$id)->get();
        $navs = [
            '0' => ['url' => "$this->segment/$this->folder", 'name' => "หน้าจัดการ Setting", "last" => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "แก้ไข Setting", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.edit", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'row' => $data,
            'menus' => \App\Models\Backend\MenuModel::where(['status' => 'on', 'position' => 'main'])->get(),
            'navs' => $navs,
        ]);
    }

    public function status($id = null)
    {
        $data = SettingModel::find($id);
        $data->status = ($data->status == 'off') ? 'on' : 'off';
        if ($data->save()) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function destroy(Request $request)
    {
        $datas = SettingModel::find(explode(',', $request->id));
        if (@$datas) {
            foreach ($datas as $data) 
            {
                ModelModel::where('id',$data->id)->delete();
                $query = SettingModel::destroy($data->id);
            }
        }

        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }
    //==== Function Insert Update Delete Status Sort & Others ====
    public function insert(Request $request, $id = null)
    {
        return $this->store($request, $id = null);
    }
    public function update(Request $request, $id)
    {
        return $this->store($request, $id);
    }
    public function store($request, $id = null)
    {
        try {
            DB::beginTransaction();
            if ($id == null) {
                $data = new SettingModel();
                //$sort = LayoutModel::count();
                // $data->sort = $sort + 1;
                // $data->status = "on";
                $data->created_at = date('Y-m-d H:i:s');
                $data->updated_at = date('Y-m-d H:i:s');
            } else {
                $data = SettingModel::find($id);
                $data->updated_at = date('Y-m-d H:i:s');
            }
            if($request->image != ''){
                $image = FunctionControl::upload_image2($request->image,'layout');
                $data->image = $image;
            }
            $data->name = $request->name;
            $data->name_image = $request->name_image;
            if ($data->save()) {
                DB::commit();
                return view("$this->prefix.alert.success", ['url' => url("$this->segment/$this->folder/edit/$data->id")]);
            } else {
                return view("$this->prefix.alert.error", ['url' => url("$this->segment/$this->folder")]);
            }
        } catch (\Exception $e) {
            $error_log = $e->getMessage();
            dd($e);
            $error_line = $e->getLine();
            $type_log = 'backend';
            $error_url = url()->current();
            $log_id = LogsController::save_logbackend($type_log, $error_log, $error_line, $error_url);

            return view("$this->prefix.alert.alert", [
                'url' => $error_url,
                'title' => "เกิดข้อผิดพลาดทางโปรแกรม",
                'text' => "กรุณาแจ้งรหัส Code : $log_id ให้ทางผู้พัฒนาโปรแกรม ",
                'icon' => 'error'
            ]);
        }
    }



    // =============== Model ==================
    // public function datatable_modal(Request $request)
    // {
    //     $like = [
    //         'search_choice' => $request->search_choice,
    //         'search_type' => $request->search_type,
    //         'search_keyword' => $request->search_keyword,
    //     ];
    //     $sTable = ModelModel::orderby('id', 'asc')
    //         ->when($like, function ($query) use ($like) {
    //             if (@$like['search_choice'] != "") 
    //             {
    //                 if(@$like['search_type'] == "like")
    //                 {
    //                     $query->where(@$like['search_choice'], 'like', '%' . @$like['search_keyword'] . '%');
    //                 }
    //                 else
    //                 {
    //                     $query->where(@$like['search_choice'], @$like['search_type'], @$like['search_keyword']);
    //                 }
    //             }
    //         })
    //         ->get();
    //     return Datatables::of($sTable)
    //         ->addIndexColumn()
    //         ->addColumn('action_name', function ($row) {
    //             $data = $row->name;
    //             return $data;
    //         })
    //         ->editColumn('status', function ($row) {
    //             $status = "";
    //             if($row->status == "on")
    //             {
    //                 $status = "checked";
    //             }
    //             $data = "<div class='form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0'>
    //                         <input id='status_change_$row->id' data-id='$row->id' onclick='status($row->id);' class='show-code form-check-input mr-0 ml-3' type='checkbox' $status>
    //                     </div>";
    //             return $data;
    //         })
    //         ->addColumn('created_at', function ($row) {
    //             $data = date('d/m/Y', strtotime('+543 Years', strtotime($row->created_at)));
    //             return $data;
    //         })
    //         ->addColumn('action', function ($row) {
    //             return " <a href='$this->segment/$this->folder/edit/$row->id/editsub/$row->id' class='mr-3 btn btn-sm btn-info' title='Edit'><i class='fa fa-edit w-4 h-4 mr-1'></i> Edit </a>                                                 
    //             <a href='javascript:' class='btn btn-sm btn-danger' onclick='deleteItem($row->id)' title='Delete'><i class='far fa-trash-alt w-4 h-4 mr-1'></i> Delete</a>
    //         ";
    //         })
    //         ->rawColumns(['action_name', 'status', 'created_at', 'action'])
    //     ->make(true);
    // }
    public function add_modal(Request $request,$id)
    {
        $data_main = LayoutModel::find($id);
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => "Dashboard", "last" => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "รายการชั้น", "last" => 0],
            '2' => ['url' => "$this->segment/$this->folder/add", 'name' => "$data_main->name", "last" => 0],
            '3' => ['url' => "$this->segment/$this->folder/add", 'name' => "Add", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.add_modal", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'navs' => $navs,
            'data_main' => $data_main,
        ]);
    }

    public function edit_modal(Request $request, $id, $sub_id)
    {
        $data_main = LayoutModel::find($id);
        $data = ModelModel::find($sub_id);
        $navs = [
            '0' => ['url' => "$this->segment", 'name' => "Dashboard", "last" => 0],
            '1' => ['url' => "$this->segment/$this->folder", 'name' => "รายการชั้น", "last" => 0],
            '2' => ['url' => "$this->segment/$this->folder/edit/$id", 'name' => "$data_main->name", "last" => 0],
            '3' => ['url' => "$this->segment/$this->folder/edit/$id/edit_modal/$layout_id", 'name' => "$data->name", "last" => 1],
        ];
        return view("$this->prefix.pages.$this->folder.edit_modal", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'row' => $data,
            'data_main' => $data_main,
            'menus' => \App\Models\Backend\MenuModel::where(['status' => 'on', 'position' => 'main'])->get(),
            'navs' => $navs,
        ]);
    }
    //==== Function Insert Update Delete Status Sort & Others ====
    public function insert_modal(Request $request, $id = null)
    {
        return $this->store_modal($request, $id = null);
    }
    public function update_modal(Request $request, $id)
    {
        return $this->store_modal($request, $id);
    }
    public function store_modal($request, $id = null)
    {
        try {
            DB::beginTransaction();
            if ($id == null) {
                
                $folder = 'zone'.$request->layout_id;
                if($request->image != null){
                    // dd($request->file('image'));
           
                        $data = new ZoneModel();
                        //$sort = ZoneModel::where('layout_id',$request->layout_id)->count();
                        // $data->sort = $sort + 1;
                        $data->layout_id = $request->layout_id;

                        //upload file 
                        $filename = "$folder".date('dmY-His');
                        $file = $request->image;
                        $lg = Image::make($file->getRealPath());
                        $ext = explode("/", $lg->mime())[1];

                        $height = Image::make($file)->height();
                        $width = Image::make($file)->width();
                        $lg->resize($width, $height)->stream();
                        $newLG = 'upload/'.$folder.'/' . $filename . '.' . $ext;
                        $store = Storage::disk('public')->put($newLG, $lg);
                        if($store){
                            $data->image = $newLG;
                        }
                        $data->name = $request->name;
                        $data->created_at = date('Y-m-d H:i:s');
                        $data->updated_at = date('Y-m-d H:i:s');
                        $data->save();
                    
                }
            }
            $data->layout_id = $request->layout_id;
            if ($data->save()) {
                DB::commit();
                return view("$this->prefix.alert.success", ['url' => url("$this->segment/$this->folder/view/$data->layout_id")]);
            } else {
                return view("$this->prefix.alert.error", ['url' => url("$this->segment/$this->folder/view/$request->layout_id")]);
            }
        } catch (\Exception $e) {
            dd($e);
            $error_log = $e->getMessage();
            $error_line = $e->getLine();
            $type_log = 'backend';
            $error_url = url()->current();
            $log_id = LogsController::save_logbackend($type_log, $error_log, $error_line, $error_url);

            return view("$this->prefix.alert.alert", [
                'url' => $error_url,
                'title' => "เกิดข้อผิดพลาดทางโปรแกรม",
                'text' => "กรุณาแจ้งรหัส Code : $log_id ให้ทางผู้พัฒนาโปรแกรม ",
                'icon' => 'error'
            ]);
        }
    }
    
    // =============== Model ==================
    public function datatable_modal(Request $request,$id)
    {
        /*$like = [
            'search_choice' => $request->search_choice,
            'search_type' => $request->search_type,
            'search_keyword' => $request->search_keyword,
        ];*/
        $sTable = ZoneModel::where('layout_id',$id)->orderby('id','asc')
            /*->when($like, function ($query) use ($like) {
                if (@$like['search_choice'] != "") 
                {
                    if(@$like['search_type'] == "like")
                    {
                        $query->where(@$like['search_choice'], 'like', '%' . @$like['search_keyword'] . '%');
                    }
                    else
                    {
                        $query->where(@$like['search_choice'], @$like['search_type'], @$like['search_keyword']);
                    }
                }
            })*/
            ->get();
        return Datatables::of($sTable)
            ->addIndexColumn()
            ->addColumn('name', function ($row) {
                $data = "<img class='rounded-lg w-52' src='$row->name' class='img-thumbnail' id='preview'>";
                return $data;
            })
            ->addColumn('image', function ($row) {
                $data = "<img class='rounded-lg w-52' src='$row->image' class='img-thumbnail' id='preview'>";
                return $data;
            })
            ->editColumn('status', function ($row) {
                $status = "";
                if($row->status == "on")
                {
                    $status = "checked";
                }
                $data = "<div class='form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0'>
                            <input id='status_change_$row->id' data-id='$row->id' onclick='status($row->id);' class='show-code form-check-input mr-0 ml-3' type='checkbox' $status>
                        </div>";
                return $data;
            })
            ->addColumn('created_at', function ($row) {
                $data = date('d/m/Y', strtotime('+543 Years', strtotime($row->created_at)));
                return $data;
            })
            ->addColumn('action', function ($row) {
                return "                                      
                <a href='$this->segment/$this->folder/edit_modal/$row->id' class='mr-3 btn btn-sm btn-info' title='Edit'><i class='fa fa-edit_modal w-4 h-4 mr-1'></i> Edit </a>                                                 
                <a href='javascript:' class='btn btn-sm btn-danger' onclick='deleteItem($row->id)' title='Delete'><i class='far fa-trash-alt w-4 h-4 mr-1'></i> Delete</a>
            ";
            })
            ->rawColumns(['action_name',  'created_at', 'action'])
            ->make(true);

    }
      // ===== VIEWS ======
    public function show_modal(Request $request)
    {
        $data = LayoutModel::find($request->id);
        return view("$this->prefix.pages.$this->folder.show_modal", [
            'prefix' => $this->prefix,
            'folder' => $this->folder,
            'segment' => $this->segment,
            'name_page' => $this->name_page,
            'data' => $data,
            'link_action' => "$this->segment/$this->folder/view/$data->id/show_modal",
        ]);
    }

    // public function insert_modal(Request $request, $id = null)
    // {
    //     return $this->store_modal($request, $id = null);
    // }


    // public function update_modal(Request $request, $id)
    // {
    //     try {
    //         DB::beginTransaction();
    //         if ($id != null) {
    //             $data = LayoutModel::find($request->layout_id);
    //             $folder = 'layout'.$request->layout_id;
    //             $data->name = $request->name;
    //             if($request->image != ''){
    //                 $image = FunctionControl::upload_image2($request->image,'property');
    //                 $data->image = $image;
    //             }
              
                
    //         }
    //         if ($data->save()) {
    //             DB::commit();
    //             return view("$this->prefix.alert.success", ['url' => url("$this->segment/$this->folder/view/$data->id")]);
    //         } else {
    //             return view("$this->prefix.alert.error", ['url' => url("$this->segment/$this->folder/view/$request->layout_id")]);
    //         }
    //     } catch (\Exception $e) {
    //         dd($e);
    //         $error_log = $e->getMessage();
    //         $error_line = $e->getLine();
    //         $type_log = 'backend';
    //         $error_url = url()->current();
    //         $log_id = LogsController::save_logbackend($type_log, $error_log, $error_line, $error_url);

    //         return view("$this->prefix.alert.alert", [
    //             'url' => $error_url,
    //             'title' => "เกิดข้อผิดพลาดทางโปรแกรม",
    //             'text' => "กรุณาแจ้งรหัส Code : $log_id ให้ทางผู้พัฒนาโปรแกรม ",
    //             'icon' => 'error'
    //         ]);
    //     }
    // }
    //     public function store_modal(Request $request, $id)
    // {
    //     try {
    //         DB::beginTransaction();
    //         if ($id != null) {
    //             $data = LayoutModel::find($request->layout_id);
    //             $folder = 'layout'.$request->layout_id;
    //             $data->name = $request->name;
    //             if($request->image != ''){
    //                 $image = FunctionControl::upload_image2($request->image,'property');
    //                 $data->image = $image;
    //             }
              
                
    //         }
    //         if ($data->save()) {
    //             DB::commit();
    //             return view("$this->prefix.alert.success", ['url' => url("$this->segment/$this->folder/view/$data->id")]);
    //         } else {
    //             return view("$this->prefix.alert.error", ['url' => url("$this->segment/$this->folder/view/$request->layout_id")]);
    //         }
    //     } catch (\Exception $e) {
    //         dd($e);
    //         $error_log = $e->getMessage();
    //         $error_line = $e->getLine();
    //         $type_log = 'backend';
    //         $error_url = url()->current();
    //         $log_id = LogsController::save_logbackend($type_log, $error_log, $error_line, $error_url);

    //         return view("$this->prefix.alert.alert", [
    //             'url' => $error_url,
    //             'title' => "เกิดข้อผิดพลาดทางโปรแกรม",
    //             'text' => "กรุณาแจ้งรหัส Code : $log_id ให้ทางผู้พัฒนาโปรแกรม ",
    //             'icon' => 'error'
    //         ]);
    //     }
    // }
    public function status_modal($id = null,$sub_id = null)
    {
        $data = ModelModel::find($sub_id);
        $data->status = ($data->status == 'off') ? 'on' : 'off';
        if ($data->save()) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

    public function destroy_modal(Request $request)
    {
        $datas = ModelModel::find(explode(',', $request->id));
        if (@$datas) {
            foreach ($datas as $data) {
                $query = ModelModel::destroy($data->id);
            }
        }

        if (@$query) {
            return response()->json(true);
        } else {
            return response()->json(false);
        }
    }

}
