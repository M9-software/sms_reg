<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $api_host = 'http://47.104.164.248';

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

        //if ($request->isMethod('post')) {
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
        //}
        return [];
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $passwd = $request->input('passwd');
            $user['merTel'] = $mobile;
            $user['merPassWord'] = $passwd;
            $user['merMac'] = '123456';

            $api_url = $this->api_host.'/XCJPro/LoginDServlet';
            $result = $this->curl_json($api_url, $user);
            $data = json_decode($result, true);

            if ($data['code'] == '00000') {
                // 设置SESSION跳转
                return redirect('http://www.sina.com.cn');
            }
        }
        return [];
    }

    public function registe(Request $request)
    {
        if ($request->isMethod('post')) {
            $mobile = $request->input('mobile');
            $cfm_qrcode = $request->input('cfm_qrcode');
            $passwd = $request->input('passwd');

            $user['operType'] = '1';
            $user['merTel'] = $mobile;
            $user['merIdCode'] = $cfm_qrcode;
            $user['merPassWord'] = $passwd;
            $user['merMac'] = '12345';

            $api_url = $this->api_host.'/XCJPro/LoginServlet';
            $result = $this->curl_json($api_url, $user);
            $data = json_decode($result, true);

            if ($data['code'] == '00000') {
                // 跳转
                return redirect('/login');
            }
        }
        return [];
    }

    private function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    private function curl_json($url, $data)
    {
        $data_string = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

}
