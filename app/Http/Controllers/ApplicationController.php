<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Contact;
use App\Models\Credential;
use App\Http\Requests\ApplicationRequest;
use Image;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $application = Application::orderBy('id','desc')->get();
        return view('admin.application.index',compact('application'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        return view('frontend.application_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request)
    {
        //
       // dd($request->file('logo_signature'));
        $application = Application::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $application);
        }
        if ($request->hasFile('logo_signature')) {
            $this->_uploadImageSign($request, $application);
        }
        return redirect()->back()->with('success','Application submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
        return view('admin.application.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Application $application)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
        if(!empty($application->logo));
        @unlink('storage/'.$application->logo);
        $application->delete();
        return redirect()->back()->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $logo)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename ="image".time() . '.' . $image->getClientOriginalExtension();
          
            Image::make($image)->resize(300, 400)->save('storage/' . $filename);
            $logo->logo = $filename;
            $logo->save();
        }
       
    }


    private function _uploadImageSign($request, $logo)
    {
        # code...
        if( $request->hasFile('logo_signature') ) {
            $image = $request->file('logo_signature');
            $filename ="sign".time() . '.' . $image->getClientOriginalExtension();
          
            Image::make($image)->resize(120, 120)->save('storage/' . $filename);
            $logo->logo_signature = $filename;
            $logo->save();
        }
       
    }
}
