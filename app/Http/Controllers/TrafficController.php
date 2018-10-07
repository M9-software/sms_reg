<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrafficController extends Controller
{

    private $api_host = 'http://www.xingchengju.com.cn';

    public function query(Request $request)
    {
        /*
        $type = $request->input('t');
        $query_string = $request->input('qs');
        $page = $request->input('p');
         */

        $session_data = $this->get_session();
        if (!$session_data) {
            return redirect('/login');
        }
        // return view('traffic', ['s' => $session_data]);

        // debug
        $type = 'global';
        $query_string = '京哈高速(G1)';
        $page = 1;

        $allowed_type = ['realtime', 'global', 'province'];
        if (!in_array($type, $allowed_type)) {
            $type = $allowed_type[0];
        }
        $page = intval($page);
        $page < 0 && $page = 1;
        $page > 100 && $page = 100;

        $page_size = 10;
        $traffic_type = '通行';
        // $traffic_type = '封路,禁限行,通行';

        $query['truckType'] = '';    // 车型，默认传””
        $query['name'] = $query_string;     // 高速名称, 如：京沪高速(G2)
        $query['pageNum'] = $page;          // 分页的第几页
        $query['pageSize'] = $page_size;
        $query['trafficIde'] = $traffic_type;   // 路况参数	封路,禁限行,通行

        print_r($query);

        $api_url = $this->api_host.'/XCJPro/LoadQueryServlet';
        $result = $this->curl_json($api_url, $query);
        $data = json_decode($result, true);

        print_r($data);exit();

        if ($data['code'] == '00000') {
            // 跳转
            return redirect('/');
        }
        return [];
    }


}
