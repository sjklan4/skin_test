<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleXMLElement;

class CasApi extends Controller
{
    public function casNo_info(Request $request){
        $apiUrl = "http://apis.data.go.kr/1480802/iciskischem/kischemlist?ServiceKey=482efjL2aYfjc5K7hpg7NJ2V02Z%2BugMaWnF%2BU%2FWs6Dk0f1X87AnYj5PenbF643s5HAwqT0lbFE%2B7dP0HkwXepQ%3D%3D&numOfRows=10&pageNo=10";

        $json = json_encode(new SimpleXMLElement($apiUrl));
        $item_arr = json_decode($json,true);

        dump($item_arr);
        
    }
}


// xml 디코딩 절차 
// ex)
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL,$path);
// //curl_setopt($ch,CURLOPT_HTTPHEADER,array('Accept: application/variant_div(left, right).epg.vrt.be.playlist_1.1+xml'));
// curl_setopt($ch, CURLOPT_FAILONERROR,1);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch, CURLOPT_TIMEOUT, 15);
// $xmlData = curl_exec($ch);
// curl_close($ch);  //xml 받아옴


// $json = json_encode(new SimpleXMLElement($xml));
// // json 데이터를 배열로 변환. 2번째 파라메터에 true를 넣지 않으면 object 형태로 반환되어 지저분해짐.
// $arr = json_decode($json, true);

// //print_r($arr);