<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showrooms;

class ShowroomsController extends Controller
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
        return view('showrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // add new car in showrooms
        Showrooms::create($request->all());

        return redirect()->route('showrooms.index')->with('success','new car successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show all car in showrooms
        return view('showrooms.show',compact('showrooms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit showrooms car data
        return view('showrooms.edit',compact('showrooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Showrooms $showrooms)
    {
        // update car data 
        $showrooms->update($request->all());

        return redirect()->route('showrooms.index')->with('success','Showrooms updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Showrooms $showrooms)
    {
        // delete rental car data in showrooms
        $showrooms->delete();

        return redirect()->route('showrooms.index')->with('success','Showrooms deleted successfully');
    }
}
