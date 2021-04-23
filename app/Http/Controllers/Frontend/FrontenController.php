<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\About;
use App\Model\Communicate;
use App\Model\Contract;
use App\Model\Logo;
use App\Model\Misson;
use App\Model\NewsEvent;
use App\Model\Service;
use App\Model\Slider;
use App\Model\Visson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;



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
        $data['misson'] = Misson::first();
        $data['abouts'] = About::first();
        $data['contract'] = Contract::first();
        return view('frontend.misson',$data);

        // return view('backend.layouts.home');
    }
   
    public function Visson()
    {
        $data['logo'] = Logo::first();
        $data['visson'] = Visson::first();
        $data['abouts'] = About::first();
        $data['contract'] = Contract::first();
        return view('frontend.visson',$data);

        // return view('backend.layouts.home');
    }
   
    public function newsEvent()
    {
        $data['logo'] = Logo::first();
        $data['newsEvent'] = NewsEvent::all();
        $data['abouts'] = About::first();
        $data['contract'] = Contract::first();
        return view('frontend.news-event',$data);

        // return view('backend.layouts.home');
    }
   
    public function ContractUs()
    {
        $data['logo'] = Logo::first();
        $data['newsEvent'] = NewsEvent::all();
        $data['abouts'] = About::first();
        $data['contract'] = Contract::first();
        return view('frontend.contract',$data);

        // return view('backend.layouts.home');
    }
    public function ContractStore(Request $request)
    {
        $contract = new Communicate();
        $contract->name =$request->name;
        $contract->email =$request->email;
        $contract->mobile_no =$request->mobile_no;
        $contract->address =$request->address;
        $contract->msg =$request->msg;
        $contract->save();
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'address' => $request->address,
            'msg' => $request->msg
        );
        Mail::send('frontend.emails.contract',$data,function($message) use($data){
            $message->from('gojnobi.bd@gmail.com','Farabi Test');
            $message->to($data['email']);
            $message->subject('Thanks for contract us');

        });
        
        return redirect()->back()->with('success','Your Message Successfully Sent');
        
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
