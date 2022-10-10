<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\NewsRequest;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::orderBy('id', 'desc')->get();
      
        return view('admin.news.index',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        $news = News::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $news);
        }
        return redirect()->route('news.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        return view('admin.news.edit',[
            'edit' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        //
        $news->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$news->logo);
            $this->_uploadImage($request, $news);
        }
        return redirect()->route('news.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        if(!empty($news->logo));
        @unlink('storage/'.$news->logo);
        $news->delete();
        return redirect()->route('news.index')->with('status','Data deleted successfully!');
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
