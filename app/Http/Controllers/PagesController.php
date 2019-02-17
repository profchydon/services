<?php

namespace App\Http\Controllers;

use App\Escort;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function escort()
    {
      return view('escort');
    }

    public function login()
    {
      return view('login');
    }

    public function signup()
    {
      return view('signup');
    }

    public function forgotpassword()
    {
      return view('forgotpassword');
    }

    public function welcome ()
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => $this->base_url."/api/v1/escorts/details/feed",
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

      $response = Json_decode($response);

      if ($err) {

      echo "cURL Error #:" . $err;

      } else {

        if ($response->status === 'success' && $response->message === "Ok") {

            if ($response->data->escorts === "No escort available right now") {

                return view('launching');

            }else {
                $features = array($response->data->features);

                // echo "<pre>";
                // var_dump($features[0]);
                // die();

                return view('welcome',
                [
                  'escorts' => $response->data->escorts ,
                  'platinumEscorts' => $response->data->platinumEscorts ,
                  'features' => $features[0]
                ]);

            }

        }

      }
    }

    public function apiCall($http, $url, $authoraization = '' )
    {
      // code...
    }

}
