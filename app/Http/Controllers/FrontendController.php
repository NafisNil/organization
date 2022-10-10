<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
class FrontendController extends Controller
{
    //
    public function index()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::orderBy('id','desc')->get();
        return view('frontend.layout.index',$data);
    }
}
