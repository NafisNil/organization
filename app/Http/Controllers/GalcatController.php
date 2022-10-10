<?php

namespace App\Http\Controllers;

use App\Models\Galcat;
use Illuminate\Http\Request;
use App\Http\Requests\GalcatRequest;

class GalcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galcat = Galcat::orderBy('id', 'desc')->get();
        
        return view('admin.galcat.index',['galcat'=>$galcat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.galcat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalcatRequest $request)
    {
        //
        $galcat = Galcat::create($request->all());
       
        return redirect()->route('galcat.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galcat  $galcat
     * @return \Illuminate\Http\Response
     */
    public function show(Galcat $galcat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galcat  $galcat
     * @return \Illuminate\Http\Response
     */
    public function edit(Galcat $galcat)
    {
        //
        return view('admin.galcat.edit',[
            'edit' => $galcat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galcat  $galcat
     * @return \Illuminate\Http\Response
     */
    public function update(GalcatRequest $request, Galcat $galcat)
    {
        //
        $galcat->update($request->all());
      
        return redirect()->route('galcat.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galcat  $galcat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galcat $galcat)
    {
        //
        $galcat->delete();
        return redirect()->route('galcat.index')->with('status','Data deleted successfully!');
    }
}
