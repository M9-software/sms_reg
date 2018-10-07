<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $api_host = 'http://www.xingchengju.com.cn';// 47.104.164.248';

    public function imgcode(Request $request)
    {
        $api_url = $this->api_host.'/XCJPro/RandomCodeServlet';
        $result = $this->curl_get($api_url);
        return json_decode($result, true);
    }

    public function qrcode(Request $request)
    {
        $imgcode_id = $request->input('imgcode_id');
        $imgcode = $request->input('imgcode');
        $mobile = $request->input('mobile');

        if ($imgcode_id && $imgcode) {
            $api_url = $this->api_host.'/XCJPro/SendMsServlet';
            $post_data = array(
                'id' => $imgcode_id,             // 图片验证码ID
                'merImageCode' => $imgcode,       // 图片验证码内容
                'merTel' => $mobile,
                'sign' => 1
            );
            $result = $this->curl_json($api_url, $post_data);
            return json_decode($result, true);
        }
        return [];
    }

    public function login(Request $request)
    {
        $mobile = $request->input('mobile');
        $passwd = $request->input('passwd');
        $user['merTel'] = $mobile;
        $user['merPassWord'] = $passwd;
        $user['merMac'] = '';
        $user['merChannel'] = '2';  // 渠道（1、app；2、官网；3、小程序）

        $api_url = $this->api_host.'/XCJPro/LoginDChannelServlet';
        $result = $this->curl_json($api_url, $user);
        $data = json_decode($result, true);

        if ($data['code'] == '00000') {
            // 设置SESSION跳转
            $this->set_session($result);
            return redirect('/');
        } else {
            return redirect('/login')->with('message', $data['responseMsg']);
        }
        return [];
    }

    public function registe(Request $request)
    {
        $mobile = $request->input('mobile');
        $cfm_qrcode = $request->input('cfm_qrcode');
        $passwd = $request->input('passwd');

        $user['operType'] = '1';    // 操作类型  1.注册；2.忘记密码
        $user['merTel'] = $mobile;
        $user['merIdCode'] = $cfm_qrcode;
        $user['merPassWord'] = $passwd;
        $user['merMac'] = '';
        $user['merChannel'] = '2';  // 渠道（1、app；2、官网；3、小程序）

        $api_url = $this->api_host.'/XCJPro/LoginChannelServlet';
        $result = $this->curl_json($api_url, $user);
        $data = json_decode($result, true);

        if ($data['code'] == '00000') {
            // 跳转
            return redirect('/login');
        }
        return [];
    }

}
