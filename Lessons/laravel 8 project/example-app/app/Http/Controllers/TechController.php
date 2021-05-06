<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Tech; 
use App\Http\Resources\TechResource;
// use Illuminate\Http\Request;

class TechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $techs = Tech::paginate(10);
        return TechResource::collection($techs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tech = new Tech();
        $tech->title = $request->title;
        $tech->body = $request->body;

        if($tech->save())
        {
            return new TechResourse($tech);
        }
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
        $tech = new Tech();
        $tech->title = $request->title;
        $tech->body = $request->body;
    if($tech->save())
    {
    return new TechResource($tech);
    }
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
        $tech = Tech::findOrFail($id);
        return new TechResource($tech);
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
        
        $tech = Tech::findOrFail($id);
            $tech->title = $request->title;
            $tech->body = $request->body;
        if($tech->save())
        {
        return new TechResource($tech);
        }
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
        $tech = Tech::findOrFail($id);
        if($tech->delete())
        {
            return new TechResource($tech);
        }
    }
}
