<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Contract;
use App\Model\Logo;
use App\Model\Misson;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Visson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FrontenController extends Controller
{
    
    public function index()
    {
        $data['logo'] = Logo::first();
        $data['contract'] = Contract::first();
        $data['misson'] = Misson::first();
        $data['visson'] = Visson::first();
        $data['sliders'] = Slider::all();
        $data['services'] = Service::all();
        $data['newsEvent'] = NewsEvent::orderBy('id','desc')->get();
        return view('frontend.mainpage',$data);

        // return view('backend.layouts.home');
    }
   
    public function aboutUs()
    {
        $data['logo'] = Logo::first();
        $data['contract'] = Contract::first();
        $data['abouts'] = About::first();
        return view('frontend.about-us',$data);

        // return view('backend.layouts.home');
    }
   
    public function Misson()
    {
        $data['logo'] = Logo::first();
        $data['contract'] = Misson::first();
        $data['abouts'] = About::first();
        return view('frontend.misson',$data);

        // return view('backend.layouts.home');
    }
   
    public function Visson()
    {
        $data['logo'] = Logo::first();
        $data['contract'] = Visson::first();
        $data['abouts'] = About::first();
        return view('frontend.visson',$data);

        // return view('backend.layouts.home');
    }
   
    public function newsEvent()
    {
        $data['logo'] = Logo::first();
        $data['contract'] = NewsEvent::all();
        $data['abouts'] = About::first();
        return view('frontend.news-event',$data);

        // return view('backend.layouts.home');
    }
   
    public function newsDetails($id)
    {
        $data['logo'] = Logo::first();
        $data['contract'] = Contract::first();
        $data['newsEvent']  = NewsEvent::find($id);
        return view('frontend.news-event-details',$data);
    }
}
