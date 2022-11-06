<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Slider;
use App\Models\Message;
use App\Models\Data;
use App\Models\Event;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Credential;
use App\Models\About;
use App\Models\Galcat;
use App\Models\Gallery;

class FrontendController extends Controller
{
    //
    public function index()
    {
        # code...
        $data['logo'] = Logo::first();
        
        $data['message'] = Message::first();
        $data['data'] = Data::orderBy('id','desc')->get();
        $data['event'] = Event::orderBy('id','desc')->take(6)->get();
        $data['slider'] = Slider::orderBy('id','desc')->get();
        $data['news'] = News::orderBy('id','desc')->take(6)->get();
        $data['testimonial'] = Testimonial::orderBy('id','desc')->get();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        return view('frontend.layout.index',$data);
    }

    public function about()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        return view('frontend.about',$data);
    }

    public function event()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['event'] = Event::simplePaginate(16);
        $data['tag'] = Event::select('tag')->distinct()->take(6)->get();
        return view('frontend.event',$data);
    }

    public function news()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['news'] = News::simplePaginate(16);
        $data['tag'] = News::select('tag')->distinct()->take(6)->get();
        return view('frontend.news',$data);
    }


    public function contact()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        return view('frontend.contact',$data);
    }


    public function team()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        
        return view('frontend.contact',$data);
    }


    public function galleryCat()
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['gallerycat'] = Galcat::all();
  
        return view('frontend.gallerycat',$data);
    }

    public function gallery($id)
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['galleryall'] = Gallery::where('category', $id)->get();
  
        return view('frontend.gallery',$data);
    }

    public function event_single($id)
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['eventsingle'] = Event::where('id', $id)->first();
        $data['tag'] = Event::select('tag')->where('id',$id)->get();
        $data['event'] = Event::orderBy('id','desc')->take(4)->get();
        return view('frontend.single_event',$data);
    }

    public function eventByTag($id)
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['event'] = Event::Where('tag', 'like', '%' . $id . '%')->paginate(10);
        $data['tag'] = Event::select('tag')->distinct()->take(6)->get();
        return view('frontend.event',$data);
    }
    

    public function newsByTag($id)
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['news'] = News::Where('tag', 'like', '%' . $id . '%')->paginate(10);
        $data['tag'] = News::select('tag')->distinct()->take(6)->get();
        return view('frontend.news',$data);
    }

    public function news_single($id)
    {
        # code...
        $data['logo'] = Logo::first();
        $data['credential'] = Credential::first();
        $data['contact'] = Contact::first();
        $data['news'] = News::orderBy('id','desc')->take(4)->get();
        $data['newssingle'] = News::where('id', $id)->first();
        $data['tag'] = News::select('tag')->where('id',$id)->get();
        return view('frontend.single_news',$data);
    }
}
