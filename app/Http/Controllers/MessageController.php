<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message = Message::orderBy('id', 'desc')->first();
        $messageCount = Message::count();
        return view('admin.message.index',['message'=>$message, 'messageCount'=>$messageCount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageRequest $request)
    {
        //
        $message = Message::create($request->all());
        if ($request->hasFile('logo')) {
            $this->_uploadImage($request, $message);
        }
        return redirect()->route('message.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
        return view('admin.message.edit',[
            'edit' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
        $message->update($request->all());
        if ($request->hasFile('logo')) {
            @unlink('storage/'.$message->logo);
            $this->_uploadImage($request, $message);
        }
        return redirect()->route('message.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
        if(!empty($message->logo));
        @unlink('storage/'.$message->logo);
        $message->delete();
        return redirect()->route('message.index')->with('status','Data deleted successfully!');
    }

    private function _uploadImage($request, $logo)
    {
        # code...
        if( $request->hasFile('logo') ) {
            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(555, 400)->save('storage/' . $filename);
            $logo->logo = $filename;
            $logo->save();
        }
       
    }
}