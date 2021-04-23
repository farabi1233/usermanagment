<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Misson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissonController extends Controller
{
    public function viewMisson()
    {
    

        $data['allData'] = Misson::all();
        $data['countMisson'] = Misson::count();
        //dd($data['countLogo']);

        return view('backend.misson.view-misson', $data);

        // return view('backend.layouts.home');
    }
    public function addMisson()
    {
        return view('backend.misson.add-misson');
    }
  
    public function storeMisson(Request $request)
    {

    
        $data = new Misson();

        $data->createy_by = Auth::user()->id;
        $data->title = $request->title;
     
        if ($request->file('image')) {
            $file = $request->file('image');
            
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/misson_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('missons.view')->with('success', 'Misson Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editMisson($id)
    {
        $editData = Misson::find($id);
        //dd( $editData);
        return view('backend.misson.edit-misson',compact('editData'));
    }
    public function updateMisson(Request $request,$id)
    {
        $data = Misson::find($id);
        $data->title = $request->title;
      
        $data->update_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/misson_images/' . $data->image));
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/misson_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('missons.view')->with('success', 'Edit misson Successfully');
    }
    
    public function deleteMisson($id)
    {
        $misson = Misson::find($id);

        if(file_exists('upload/misson_images/' . $misson->image)  &&! empty($misson->image)) {
            unlink('upload/misson_images/' . $misson->image);
        }

        $misson->delete();
        return redirect()->route('missons.view')->with('success', 'Misson Deleted Successfully');
    }
}
