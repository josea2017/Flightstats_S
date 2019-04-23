<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Arr;
use Response;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{


    public function getClients()
    {
        $clients = null;
        //$clients = App\Client::orderBy('id', 'asc')->get();
        //$profile = \App\User::find($id);
        $result = "";
        //$clients = DB::table('clients')->get();
        $clients = \App\Client::orderBy('id', 'asc')->get();
        return response()->json(compact('clients'),200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchClient(Request $request){
        $email = $request->get('email');
        $password = $request->get('password');
        $client = null;
        $result = "false";
        $profile2 = DB::table('clients')->where('email', $email)->get()->first();
        //compara objeto == null
        if($profile2 == null){
            $result = "false";
            return $result;
        }else{
            $id = $profile2->id;
            $profile = \App\Client::find($id);
            //echo $profile->password;
            if($profile->password != $password)
            {
             $result = "false";
             return $result;
            }else{
              //retorna el objeto encontrado
             return response()->json(compact('profile'),200);
            } 
        }
    }

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




    
}
