<?php

namespace App\Http\Controllers;

use App\Api;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Api::all();
        return response()->json($items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $api = new Api;
        $api->name = $request->name;
        $api->save();
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function show(Api $api)
    {
        $item = Api::find($api->id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Api $api)
    {
        $api = Api::find($api->id);
        $api->name = $request->name;
        $api->save();
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Api  $api
     * @return \Illuminate\Http\Response
     */
    public function destroy(Api $api)
    {
        $api = Api::find($api->id); 
        $api->delete();
        return response()->json();
    }
}
