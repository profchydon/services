<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class ImageController extends Controller
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
    public function store(Request $request)
    {
      // $user = Auth::user()->username;

    	$imageName = request()->file->getClientOriginalName();

      request()->file->move(public_path('img/escort/images'), $imageName);


    	return response()->json(['uploaded' => '/img/escort/images/'.$imageName]);
    }
}
