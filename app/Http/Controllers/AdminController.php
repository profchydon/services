<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;
use DB;
use Session;
use Alert;

class AdminController extends Controller
{

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
        Session::put('base_url' , $this->base_url);
    }


    //
    public function dashboard()
    {

        $authorization = Auth::user()->api_key;
        // dd($authorization);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url."/api/v1/admin/dashboard",
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
          $escort = (new Collection($escort['data']))->paginate(10);
          // echo "<pre>";
          // var_dump($escort);
          // die();

          return view('admindashboard', ['escorts' => $escort]);

        }
    }

    public function verifyEscort($escort_id)
    {

        $authorization = Auth::user()->api_key;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url."/api/v1/admin/verify/escort/{$escort_id}",
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
          // echo "<pre>";
          // dd($escort['data']);
          // die();

          return view('verify-escort-admin' , ['escort' => $escort['data']]);

        }

    }

    public function verifyEscortTrue($verification_id, $escort_id)
    {

        $data = [
          'escort_id' => $escort_id,
          'verification_id' => $verification_id,
        ];

        $data = Json_encode($data, TRUE);

        $authorization = Auth::user()->api_key;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->base_url."/api/v1/admin/verify/escort/true",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
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

          $response = Json_decode($response , TRUE);
          // echo "<pre>";
          // var_dump($response);
          // die();

          if ($response['status'] == 'success' && $response['message'] == "Ok") {

              return redirect()->back()->with('message' , 'Escort verification succesful');

          }else{

              return redirect()->back()->with('error' , 'Escort verification failed');

          }

        }
    }

}
