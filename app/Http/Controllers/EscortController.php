<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EscortController extends Controller
{

    //
    public function dashboard()
    {

        $authorization = Auth::user()->api_key;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8080/api/v1/escorts/details/dashboard",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
              "Authorization: {$authorization}",
              "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

          $escort = Json_decode($response , TRUE);

          return view('escortdashboard', ['details' => $escort['data']]);

        }
    }

}
