<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $passwd = $request->input('passwd');
            echo "mobile = $mobile<br />";
            echo "passwd = $passwd<br />";
        }
    }

    public function registe(Request $request)
    {
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $cfm_qrcode = $request->input('cfm_qrcode');
            $passwd = $request->input('passwd');
            echo "mobile = $mobile<br />";
            echo "cfm_qrcode = $cfm_qrcode<br />";
            echo "passwd = $passwd<br />";
        }
    }
}
