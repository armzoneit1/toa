<?php

namespace App\Http\Controllers\Webpanel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


use App\Models\Backend\User;
use App\Models\Backend\MemberModel;

class AuthController extends Controller
{
    protected $prefix = 'backend';
    public function getLogin(Request $request)
    {
        if (Auth::guard()->id() != null) {
            if($request->session()->get('role') == 'A'){
                return redirect('webpanel/overview');
            }
            return redirect('/home');
        } else {
            return view("$this->prefix.index", [
                'css' => [""],
                'prefix' => $this->prefix
            ]);
        }
    }
    public function postLogin(Request $request)
    {
        // dd($request);
        $username = $request->username;
        $password = $request->password;

        // $remember = ($request->remember == 'on') ? true : false;
        if (Auth::attempt(['username' => $username, 'password' => $password], false)) {
            $member = User::find(Auth::guard()->id());
            // dd($member);
            if ($member->status != "active") {
                return redirect('')->with(['error' => 'ไม่สามารถใช้งานได้ กรุณาติดต่อผู้ดูแล !']);
            } else {
                $request->session()->put('username', $username);
                if($member->role == 'A'){
                    $request->session()->put('role', 'A');
                    return redirect('webpanel/overview');
                }
                else{
                    $request->session()->put('role', 'U');
                    return redirect('home');
                }
            }
        } else {
            return redirect('')->with(['error' => 'ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !']);
        }
    }

    public function logOut(Request $request)
    {
        if (!Auth::logout()) {
            $request->session()->flush();
            return redirect("");
        }
    }
}
