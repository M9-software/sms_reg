<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $user = array();
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $passwd = $request->input('passwd');
            $user['mobile'] = $mobile;
            $user['passwd'] = $passwd;
        }
        return $user;
    }

    public function registe(Request $request)
    {
        $user = array();
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $cfm_qrcode = $request->input('cfm_qrcode');
            $passwd = $request->input('passwd');
            $user['mobile'] = $mobile;
            $user['cfm_qrcode'] = $cfm_qrcode;
            $user['passwd'] = $passwd;
        }
        return $user;
    }
}
