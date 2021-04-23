<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Logo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoController extends Controller
{
    public function viewLogo()
    {
        $data['allData'] = Logo::all();
        $data['countLogo'] = Logo::count();
        //dd($data['countLogo']);

        return view('backend.logo.view-logo', $data);

        // return view('backend.layouts.home');
    }
    public function addLogo()
    {
        return view('backend.logo.add-logo');
    }
  
    public function storeLogo(Request $request)
    {

    
        $data = new Logo();
        $data->createy_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('logos.view')->with('success', 'Add Logo Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editLogo($id)
    {
        $editData = Logo::find($id);
        return view('backend.logo.edit-logo',compact('editData'));
    }
    public function updateLogo(Request $request,$id)
    {
        $data = Logo::find($id);
        $data->update_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/logo_images/' . $data->image));
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('logos.view')->with('success', 'Edit Logo Successfully');
    }
    
    public function deleteLogo($id)
    {
        $logo = Logo::find($id);

        if (file_exists('upload/logo_images/' . $logo->image)  &&! empty($logo->image)) {
            unlink('upload/logo_images/' . $logo->image);
        }

        $logo->delete();
        return redirect()->route('logos.view')->with('success', 'Logo Deleted Successfully');
    }
}
