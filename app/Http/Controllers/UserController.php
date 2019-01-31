<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Alert;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendActivationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Collection;

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

              // Get the current date
              $date = Carbon::now();

              // Create a random key as api_key for the User
              $hash = Hash::make($date);
              $apikey = str_random(100);

              // Update api_key in the user table for the particular user
              DB::table('users')->where('username', $user->username)->update(['api_key' => $apikey]);

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


    public function getEscortsByRank($rank)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/escorts/{$rank}/all",
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


          $response = json_decode($response , TRUE);


          $escorts = (new Collection($response['data']['escorts']))->paginate(24);
          $features = $response['data']['features'];
          $features = (object) $features;

          // var_dump($features);
          // die();

          return view('platinumescorts',
          [
            'escorts' => $escorts,
            'features' => $features
          ]);

        }
    }

    public function getEscorts()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/escorts/all",
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

          $escorts = (new Collection($escorts['data']))->paginate(24);

          return view('escorts', ['escorts' => $escorts]);

        }
    }

    public function getActivation($email)
    {
        return view('activation' , ['email' => $email]);
    }

}
