<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function viewService()
    {
        $data['allData'] = Service::all();
        //$data['countLogo'] = Service::count();
        //dd($data['countLogo']);

        return view('backend.service.view-service', $data);

        // return view('backend.layouts.home');
    }
    public function addService()
    {
        return view('backend.service.add-service');
    }
  
    public function storeService(Request $request)
    {

    
        $data = new Service();

        $data->createy_by = Auth::user()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        

        
        $data->save();
        return redirect()->route('services.view')->with('success', 'Service Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editService($id)
    {
        $editData = Service::find($id);
        //dd( $editData);
        return view('backend.service.edit-service',compact('editData'));
    }
    public function updateService(Request $request,$id)
    {
        $data = Service::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->update_by = Auth::user()->id;   
        $data->save();
        return redirect()->route('services.view')->with('success', 'Edit Slider Successfully');
    }
    
    public function deleteService($id)
    {
        $service = Service::find($id);

        

        $service->delete();
        return redirect()->route('services.view')->with('success', 'Service Deleted Successfully');
    }
}
