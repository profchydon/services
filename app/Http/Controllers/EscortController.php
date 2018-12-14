<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class EscortController extends Controller
{

  /**
   * success response method.
   *
   * @return \Illuminate\Http\Response
   */
    public function uploadImage(Request $request)
    {

      $user = Auth::user()->username;

      $imageName = "{$user}"."_".request()->file->getClientOriginalName();

      $imageName = preg_replace("/[^a-zA-Z0-9.]/", "", $imageName);

      request()->file->move(public_path('img/escort/images'), $imageName);

      $this->insertImage($imageName, Auth::user()->id);

      return response()->json(['uploaded' => '/img/escort/images/'.$imageName]);

    }

    //
    public function insertImage($imageName, $user_id)
    {

        $escort = DB::table('escorts')->where('user_id' , $user_id)->first();
        $image = DB::table('images')->where('escort_id' , $escort->id)->first();

        if (count($image) == "0") {

          $data = [
            'user_id' => $user_id,
            'escort_id' => $escort->id,
            'image_1' => $imageName,
          ];

          $data = Json_encode($data, TRUE);

          $authorization = Auth::user()->api_key;

          $curl = curl_init();

          curl_setopt_array($curl, array(
              CURLOPT_URL => "http://localhost:8080/api/v1/images/create",
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

          }


        }else {

          unset($image->user_id);
          unset($image->escort_id);
          unset($image->created_at);
          unset($image->updated_at);

          if (empty($image->image_1)) {
              $image_key = 'image_1';
          }elseif (empty($image->image_2)) {
              $image_key = 'image_2';
          }elseif (empty($image->image_3)) {
              $image_key = 'image_3';
          }elseif (empty($image->image_4)) {
              $image_key = 'image_4';
          }elseif (empty($image->image_5)) {
              $image_key = 'image_5';
          }elseif (empty($image->image_6)) {
              $image_key = 'image_6';
          }elseif (empty($image->image_7)) {
              $image_key = 'image_7';
          }elseif (empty($image->image_8)) {
              $image_key = 'image_8';
          }elseif (empty($image->image_9)) {
              $image_key = 'image_9';
          }elseif (empty($image->image_10)) {
              $image_key = 'image_10';
          }elseif (empty($image->image_11)) {
              $image_key = 'image_11';
          }elseif (empty($image->image_12)) {
              $image_key = 'image_12';
          }

          $data = [
            'user_id' => $user_id,
            'escort_id' => $escort->id,
            $image_key => $imageName,
          ];

          $data = Json_encode($data, TRUE);

          $authorization = Auth::user()->api_key;

          $curl = curl_init();

          curl_setopt_array($curl, array(
              CURLOPT_URL => "http://localhost:8080/api/v1/images/update",
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

          }

        }


    }

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


    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
      public function uploadVideo(Request $request)
      {

        $user = Auth::user()->username;

        $videoName = "{$user}"."_".request()->file->getClientOriginalName();

        $videoName = preg_replace("/[^a-zA-Z0-9.]/", "", $videoName);

        request()->file->move(public_path('video/escort'), $videoName);

        $this->insertVideo($videoName, Auth::user()->id);

        return response()->json(['uploaded' => '/video/escort/'.$videoName]);

      }

      //
      public function insertVideo($videoName, $user_id)
      {

          $escort = DB::table('escorts')->where('user_id' , $user_id)->first();
          $video = DB::table('videos')->where('escort_id' , $escort->id)->first();

          if (count($video) == "0") {

            $data = [
              'user_id' => $user_id,
              'escort_id' => $escort->id,
              'video_1' => $videoName,
            ];

            $data = Json_encode($data, TRUE);

            $authorization = Auth::user()->api_key;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://localhost:8080/api/v1/videos/create",
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

            }


          }else {

            unset($video->user_id);
            unset($video->escort_id);
            unset($video->created_at);
            unset($video->updated_at);

            if (empty($video->video_1)) {
                $video_key = 'video_1';
            }elseif (empty($video->video_2)) {
                $video_key = 'video_2';
            }elseif (empty($video->video_3)) {
                $video_key = 'video_3';
            }elseif (empty($video->video_4)) {
                $video_key = 'video_4';
            }elseif (empty($video->video_5)) {
                $video_key = 'video_5';
            }elseif (empty($video->video_6)) {
                $video_key = 'video_6';
            }elseif (empty($video->video_7)) {
                $video_key = 'video_7';
            }elseif (empty($video->video_8)) {
                $video_key = 'video_8';
            }elseif (empty($video->video_9)) {
                $video_key = 'video_9';
            }elseif (empty($video->video_10)) {
                $video_key = 'video_10';
            }

            $data = [
              'user_id' => $user_id,
              'escort_id' => $escort->id,
              $video_key => $videoName,
            ];

            $data = Json_encode($data, TRUE);

            $authorization = Auth::user()->api_key;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "http://localhost:8080/api/v1/videos/update",
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

            }

          }


      }

}
