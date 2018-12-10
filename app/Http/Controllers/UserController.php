<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Alert;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login(Request $request)
    {

        $data = [
          'username' => $request->username,
          'password' => $request->password,
        ];

        $data = Json_encode($data, TRUE);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8080/api/v1/auth/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = Json_decode($response);
        // var_dump($response); die();
        if ($err) {
        echo "cURL Error #:" . $err;
        } else {

          if ($response->status === 'failed') {

              if ($response->message === "Incorrect login details") {

                  return redirect()->back()->with('error' , $response->message);

              }elseif ($response->message === "User's account has not been activated") {

                  return view('activation', ['email' => $response->data]);

              }

          }elseif ($response->status === 'success' && $response->message === "Ok") {

              $user = $response->data;

              // echo "<pre>";
              // var_dump($user->user->email);
              // die();

              Auth::loginUsingId($user->user->id);

              if ( Auth::user()->user_type == "escort") {

                  return redirect()->intended('escort/dashboard');
                  // return view('escortdashboard', ['details' => $user]);

              }elseif ( Auth::user()->user_type == "user" ) {

                  return redirect()->intended('/');

              }elseif ( Auth::user()->user_type == "agency") {

                  return redirect()->intended('agency/dashboard');

              }

          }

        }
    }


    public function activation(Request $request)
    {
        $data = [
          'email' => $request->email,
          'code' => $request->code,
        ];

        $data = Json_encode($data, TRUE);

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/activations/user/activate",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => $data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response = Json_decode($response);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

          if ($response->status === 'failed') {

              if ($response->message === "Verification code does not match") {

                  return redirect()->back()->with('error' , $response->message);

              }elseif ($response->message === "Sorry..No record found attached to this email") {

                  return redirect()->back()->with('error' , $response->message);

              }

          }elseif ($response->status === 'success' && $response->message === "Account successful activated") {

              Alert::success('Account activation was successful');

              $user = $response->data->user;

              Auth::loginUsingId($user->id);

              if ( Auth::user()->user_type == "escort") {

                  return redirect()->intended('escort/dashboard');

              }elseif ( Auth::user()->user_type == "user" ) {

                  return redirect()->intended('/');

              }elseif ( Auth::user()->user_type == "agency") {

                  return redirect()->intended('agency/dashboard');

              }

          }

        }
    }

    public function getEscort($escort)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/escorts/".$escort,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(

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

          return view('escort', ['escort' => $escort['data']]);

        }
    }


    public function getVIPEscorts()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/escorts/vip/all",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(

            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

          $vipEscorts = json_decode($response , TRUE);

          $vipEscorts = $vipEscorts['data'];

          return view('vip_escorts', compact('vipEscorts'));

        }
    }

    public function getEscorts()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/escorts",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(

            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

          $escorts = json_decode($response , TRUE);

          return view('escorts', ['escorts' => $escorts['data']]);

        }
    }

}
