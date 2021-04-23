<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Model\Visson;

use Illuminate\Support\Facades\Auth;

class VissonController extends Controller
{
    public function viewVisson()
    {
    

        $data['allData'] = Visson::all();
        $data['countVisson'] = Visson::count();
        //dd($data['countLogo']);

        return view('backend.visson.view-visson', $data);

        // return view('backend.layouts.home');
    }
    public function addVisson()
    {
        return view('backend.visson.add-visson');
    }
  
    public function storeVisson(Request $request)
    {

    
        $data = new Visson();

        $data->createy_by = Auth::user()->id;
        $data->title = $request->title;
     
        if ($request->file('image')) {
            $file = $request->file('image');
            
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/visson_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('vissons.view')->with('success', 'Visson Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editVisson($id)
    {
        $editData = Visson::find($id);
        //dd( $editData);
        return view('backend.visson.edit-visson',compact('editData'));
    }
    public function updateVisson(Request $request,$id)
    {
        $data = Visson::find($id);
        $data->title = $request->title;
      
        $data->update_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/visson_images/' . $data->image));
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/visson_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('vissons.view')->with('success', 'Edit Visson Successfully');
    }
    
    public function deleteVisson($id)
    {
       $visson = Visson::find($id);

        if(file_exists('upload/visson_images/' .$visson->image)  &&! empty($visson->image)) {
            unlink('upload/visson_images/' .$visson->image);
        }

       $visson->delete();
        return redirect()->route('vissons.view')->with('success', 'Visson Deleted Successfully');
    }
}
