<?php

namespace App\Http\Controllers\Application;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\GameUsers;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getInfo(Request $request)
    {
        // To do : Authentication

        $response = array();

        if(!$this->doVerify($request->input('providerToken'))) {
            $errorCode = 1;
            $errorMessage = "Provider Verify Failed";

            $response = array(
                'errorCode'=>$errorCode,
                'errorMessage'=>$errorMessage
            );


            return $response;
        }

        // return user game info

        $userKey = $request->input('userKey', 'Dummy');

        $user = GameUsers::where('user_key', '=', $userKey)->first();

        if(is_null($user)){
            $user = new GameUsers;
            $user->user_key = $userKey;
            $user->paid_primary_currency = 0;
            $user->unpaid_primary_currency = 0;
            $user->paid_secondary_currency = 0;
            $user->unpaid_secondary_currency = 0;
            $user->image_url = $request->input('imageUrl', 'http://video.skysports.com/t1cXZ5eTrAljUDFkzxItnYVrgoDGxcjd/promo276203780');
            $user->provider_name = $request->input('providerName', 'unKnown');
            $user->mission_id = 0;
            $user->best_score = 0;
            $user->game_name = $request->input('gameName', 'dummy');
            $user->save();

        }

        $errorCode = 0;
        $errorMessage = "";

        $response = array(
            'errorCode'=>$errorCode,
            'errorMessage'=>$errorMessage,
            'user'=>$user
        );

        return json_encode($response);
    }

    private function doVerify($token)
    {
        return TRUE;
    }

}
