<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Contract;
use App\Model\Logo;
use App\Model\Misson;
use App\Model\NewsEvent;
use App\Model\slider;
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
        $data['sliders'] = slider::all();
        $data['newsEvent'] = NewsEvent::orderBy('id','desc')->get();
        return view('frontend.mainpage',$data);

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
