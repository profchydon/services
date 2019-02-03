<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;

class EscortController extends Controller
{

  /**
   * Class constructor
   */
  public function __construct()
  {
      $this->middleware('auth', ['except' => []]);
  }

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

    public function serviceRegister (Request $request)
    {

      $data = [
        'escort_id' => $request->escort_id,
        'sixty_nine' => isset($request->service1) ? 1 : 0,
        'anal_rimming' => isset($request->service2) ? 1 : 0,
        'a_level_anal' => isset($request->service3) ? 1 : 0,
        'bdsm_giving' => isset($request->service4) ? 1 : 0,
        'bdsm_receiving' => isset($request->service5) ? 1 : 0,
        'being_filmed' => isset($request->service6) ? 1 : 0,
        'body_worship' => isset($request->service7) ? 1 : 0,
        'bondage' => isset($request->service8) ? 1 : 0,
        'cum_in_mouth' => isset($request->service9) ? 1 : 0,
        'cum_on_body' => isset($request->service10) ? 1 : 0,
        'cum_on_face' => isset($request->service11) ? 1 : 0,
        'couples' => isset($request->service12) ? 1 : 0,
        'deep_french_kissing' => isset($request->service13) ? 1 : 0,
        'dinner_dates' => isset($request->service14) ? 1 : 0,
        'domination' => isset($request->service15) ? 1 : 0,
        'domination_giving' => isset($request->service16) ? 1 : 0,
        'domination_receiving' => isset($request->service17) ? 1 : 0,
        'double_penetration' => isset($request->service18) ? 1 : 0,
        'erotic_massage' => isset($request->service19) ? 1 : 0,
        'extraball' => isset($request->service20) ? 1 : 0,
        'face_sitting' => isset($request->service21) ? 1 : 0,
        'fetish' => isset($request->service22) ? 1 : 0,
        'fisting_giving' => isset($request->service23) ? 1 : 0,
        'fisting_receiving' => isset($request->service24) ? 1 : 0,
        'foot_fetish' => isset($request->service25) ? 1 : 0,
        'french_kissing' => isset($request->service26) ? 1 : 0,
        'gang_bang' => isset($request->service27) ? 1 : 0,
        'girl_friend_experience' => isset($request->service28) ? 1 : 0,
        'golden_shower' => isset($request->service29) ? 1 : 0,
        'hand_relief' => isset($request->service30) ? 1 : 0,
        'handjob' => isset($request->service31) ? 1 : 0,
        'hardsports_giving' => isset($request->service32) ? 1 : 0,
        'hardsports_receiving' => isset($request->service33) ? 1 : 0,
        'humiliation_giving' => isset($request->service34) ? 1 : 0,
        'humiliation_receiving' => isset($request->service35) ? 1 : 0,
        'lap_dancing' => isset($request->service36) ? 1 : 0,
        'long_time' => isset($request->service37) ? 1 : 0,
        'massage' => isset($request->service38) ? 1 : 0,
        'mmf_threesome' => isset($request->service39) ? 1 : 0,
        'modelling' => isset($request->service40) ? 1 : 0,
        'o_level_oral_sex' => isset($request->service41) ? 1 : 0,
        'oral_with_condom' => isset($request->service42) ? 1 : 0,
        'oral_without_condom' => isset($request->service43) ? 1 : 0,
        'parties' => isset($request->service44) ? 1 : 0,
        'period_play' => isset($request->service45) ? 1 : 0,
        'pregnant' => isset($request->service46) ? 1 : 0,
        'prostrate_massage' => isset($request->service47) ? 1 : 0,
        'porn_star_experience' => isset($request->service48) ? 1 : 0,
        'receiving_oral' => isset($request->service49) ? 1 : 0,
        'rimming_giving' => isset($request->service50) ? 1 : 0,
        'rimming_receiving' => isset($request->service51) ? 1 : 0,
        'role_play' => isset($request->service52) ? 1 : 0,
        'sex_toys' => isset($request->service53) ? 1 : 0,
        'smoking_fetish' => isset($request->service54) ? 1 : 0,
        'spanking_giving' => isset($request->service55) ? 1 : 0,
        'spanking_receiving' => isset($request->service56) ? 1 : 0,
        'strap_on' => isset($request->service57) ? 1 : 0,
        'swallow' => isset($request->service58) ? 1 : 0,
        'swallow_at_discretion' => isset($request->service59) ? 1 : 0,
        'swinging' => isset($request->service60) ? 1 : 0,
        'tantric_massage' => isset($request->service61) ? 1 : 0,
        'threesome' => isset($request->service62) ? 1 : 0,
        'tie_and_tease' => isset($request->service63) ? 1 : 0,
        'travel_companion' => isset($request->service64) ? 1 : 0,
        'uniforms' => isset($request->service65) ? 1 : 0,
        'watersports_giving' => isset($request->service66) ? 1 : 0,
        'watersports_receiving' => isset($request->service67) ? 1 : 0,
        'watching_football' => isset($request->service68) ? 1 : 0,
        'walking' => isset($request->service69) ? 1 : 0,
        'beach_parties' => isset($request->service70) ? 1 : 0,
        'swimming' => isset($request->service71) ? 1 : 0,
        'attending_corporate_parties' => isset($request->service72) ? 1 : 0,
        'attending_political_rallies' => isset($request->service73) ? 1 : 0,
        'travelling_companion' => isset($request->service74) ? 1 : 0,
        'travelling_outside_the_city' => isset($request->service75) ? 1 : 0,
        'preparing_a_meal' => isset($request->service76) ? 1 : 0,
      ];

      $data = Json_encode($data, TRUE);

      $authorization = Auth::user()->api_key;

      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_URL => "http://localhost:8080/api/v1/services/create",
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
      $response = Json_decode($response);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {

        if ($response->status === 'failed') {

            return redirect()->intended('escort/dashboard');

        }elseif ($response->status === 'success' && $response->message === "Services created successfully") {

            return redirect()->intended('escort/dashboard');

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

          // echo "<pre>";
          // var_dump($escort['data']["escort"]); die();
          Session::put('profile_image' , $escort['data']["escort"]['profile_image']);
          Session::put('escort_id' , $escort['data']["escort"]['id']);
          Session::put('verified' , $escort['data']["escort"]['verified']);

          // var_dump(session('verified')); die();

          return view('escortdashboard2', ['details' => $escort['data']]);

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

      public function serviceUpdate (Request $request)
      {

        $data = [
          'escort_id' => $request->escort_id,
          'sixty_nine' => isset($request->service1) ? 1 : 0,
          'anal_rimming' => isset($request->service2) ? 1 : 0,
          'a_level_anal' => isset($request->service3) ? 1 : 0,
          'bdsm_giving' => isset($request->service4) ? 1 : 0,
          'bdsm_receiving' => isset($request->service5) ? 1 : 0,
          'being_filmed' => isset($request->service6) ? 1 : 0,
          'body_worship' => isset($request->service7) ? 1 : 0,
          'bondage' => isset($request->service8) ? 1 : 0,
          'cum_in_mouth' => isset($request->service9) ? 1 : 0,
          'cum_on_body' => isset($request->service10) ? 1 : 0,
          'cum_on_face' => isset($request->service11) ? 1 : 0,
          'couples' => isset($request->service12) ? 1 : 0,
          'deep_french_kissing' => isset($request->service13) ? 1 : 0,
          'dinner_dates' => isset($request->service14) ? 1 : 0,
          'domination' => isset($request->service15) ? 1 : 0,
          'domination_giving' => isset($request->service16) ? 1 : 0,
          'domination_receiving' => isset($request->service17) ? 1 : 0,
          'double_penetration' => isset($request->service18) ? 1 : 0,
          'erotic_massage' => isset($request->service19) ? 1 : 0,
          'extraball' => isset($request->service20) ? 1 : 0,
          'face_sitting' => isset($request->service21) ? 1 : 0,
          'fetish' => isset($request->service22) ? 1 : 0,
          'fisting_giving' => isset($request->service23) ? 1 : 0,
          'fisting_receiving' => isset($request->service24) ? 1 : 0,
          'foot_fetish' => isset($request->service25) ? 1 : 0,
          'french_kissing' => isset($request->service26) ? 1 : 0,
          'gang_bang' => isset($request->service27) ? 1 : 0,
          'girl_friend_experience' => isset($request->service28) ? 1 : 0,
          'golden_shower' => isset($request->service29) ? 1 : 0,
          'hand_relief' => isset($request->service30) ? 1 : 0,
          'handjob' => isset($request->service31) ? 1 : 0,
          'hardsports_giving' => isset($request->service32) ? 1 : 0,
          'hardsports_receiving' => isset($request->service33) ? 1 : 0,
          'humiliation_giving' => isset($request->service34) ? 1 : 0,
          'humiliation_receiving' => isset($request->service35) ? 1 : 0,
          'lap_dancing' => isset($request->service36) ? 1 : 0,
          'long_time' => isset($request->service37) ? 1 : 0,
          'massage' => isset($request->service38) ? 1 : 0,
          'mmf_threesome' => isset($request->service39) ? 1 : 0,
          'modelling' => isset($request->service40) ? 1 : 0,
          'o_level_oral_sex' => isset($request->service41) ? 1 : 0,
          'oral_with_condom' => isset($request->service42) ? 1 : 0,
          'oral_without_condom' => isset($request->service43) ? 1 : 0,
          'parties' => isset($request->service44) ? 1 : 0,
          'period_play' => isset($request->service45) ? 1 : 0,
          'pregnant' => isset($request->service46) ? 1 : 0,
          'prostrate_massage' => isset($request->service47) ? 1 : 0,
          'porn_star_experience' => isset($request->service48) ? 1 : 0,
          'receiving_oral' => isset($request->service49) ? 1 : 0,
          'rimming_giving' => isset($request->service50) ? 1 : 0,
          'rimming_receiving' => isset($request->service51) ? 1 : 0,
          'role_play' => isset($request->service52) ? 1 : 0,
          'sex_toys' => isset($request->service53) ? 1 : 0,
          'smoking_fetish' => isset($request->service54) ? 1 : 0,
          'spanking_giving' => isset($request->service55) ? 1 : 0,
          'spanking_receiving' => isset($request->service56) ? 1 : 0,
          'strap_on' => isset($request->service57) ? 1 : 0,
          'swallow' => isset($request->service58) ? 1 : 0,
          'swallow_at_discretion' => isset($request->service59) ? 1 : 0,
          'swinging' => isset($request->service60) ? 1 : 0,
          'tantric_massage' => isset($request->service61) ? 1 : 0,
          'threesome' => isset($request->service62) ? 1 : 0,
          'tie_and_tease' => isset($request->service63) ? 1 : 0,
          'travel_companion' => isset($request->service64) ? 1 : 0,
          'uniforms' => isset($request->service65) ? 1 : 0,
          'watersports_giving' => isset($request->service66) ? 1 : 0,
          'watersports_receiving' => isset($request->service67) ? 1 : 0,
          'watching_football' => isset($request->service68) ? 1 : 0,
          'walking' => isset($request->service69) ? 1 : 0,
          'beach_parties' => isset($request->service70) ? 1 : 0,
          'swimming' => isset($request->service71) ? 1 : 0,
          'attending_corporate_parties' => isset($request->service72) ? 1 : 0,
          'attending_political_rallies' => isset($request->service73) ? 1 : 0,
          'travelling_companion' => isset($request->service74) ? 1 : 0,
          'travelling_outside_the_city' => isset($request->service75) ? 1 : 0,
          'preparing_a_meal' => isset($request->service76) ? 1 : 0,
        ];

        $data = Json_encode($data, TRUE);

        $authorization = Auth::user()->api_key;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8080/api/v1/services/update",
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
        $response = Json_decode($response);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {

          if ($response->status === 'failed') {

              return redirect()->intended('escort/dashboard');

          }elseif ($response->status === 'success' && $response->message === "Services updated successfully") {

              return redirect()->intended('escort/dashboard');

          }

        }

      }

      public function saveGoFeatureDetails(Request $request)
      {
        $authorization = Auth::user()->api_key;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8080/api/v1/features/create",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
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

          if ($response['message'] == "Feature successful created") {

              return "Transaction successfully processed and saved";

          }

        }
      }

}
