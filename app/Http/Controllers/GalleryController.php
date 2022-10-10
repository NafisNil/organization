<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Galcat;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\GalleryRequest;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery = Gallery::orderBy('id', 'desc')->get();
         $galcaat = Galcat::all();
        return view('admin.gallery.index',['gallery'=>$gallery,  'galcat' => $galcaat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $galcaat = Galcat::all();
        return view('admin.gallery.create',
      [  'galcat' => $galcaat]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //
        $gallery = Gallery::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $gallery);
        }
        return redirect()->route('gallery.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
        $galcaat = Galcat::all();
        return view('admin.gallery.edit',[
            'edit' => $gallery,
            'galcat' => $galcaat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        //
        $gallery->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$gallery->logo);
            $this->_uploadImage($request, $gallery);
        }
        return redirect()->route('gallery.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
        if(!empty($gallery->logo));
        @unlink('storage/'.$gallery->logo);
        $gallery->delete();
        return redirect()->route('gallery.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $logo)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(845, 565)->save('storage/' . $filename);
            $logo->logo = $filename;
            $logo->save();
        }
       
    }
}
