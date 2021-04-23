<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function viewAbout()
    {
        $data['allData'] = About::all();
        $data['countAbout'] = About::count();
        //dd($data['countLogo']);

        //$data['countLogo'] = Slider::count();
        //dd($data['countLogo']);

        return view('backend.about.view-about', $data);

        // return view('backend.layouts.home');
    }
    public function addAbout()
    {
        return view('backend.about.add-about');
    }
  
    public function storeAbout(Request $request)
    {

    
        $data = new About();

        $data->createy_by = Auth::user()->id;
        $data->description = $request->description;
      
        
        
        $data->save();
        return redirect()->route('abouts.view')->with('success', 'About Data Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editAbout($id)
    {
        $editData = About::find($id);
        //dd( $editData);
        return view('backend.about.edit-about',compact('editData'));
    }
    public function updateAbout(Request $request,$id)
    {
        $data = About::find($id);
        
        $data->description = $request->description;
        $data->update_by = Auth::user()->id;
        
        
        $data->save();
        return redirect()->route('abouts.view')->with('success', 'Edit About Data Successfully');
    }
    
    public function deleteAbout($id)
    {
        $about = About::find($id);

       
        $about->delete();
        return redirect()->route('abouts.view')->with('success', 'About Data Deleted Successfully');
    }
}
