<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContractController extends Controller
{
    public function viewContract()
    {
        $data['allData'] = Contract::all();
        $data['countContract'] = Contract::count();
        //dd($data['countLogo']);

        //$data['countLogo'] = Slider::count();
        //dd($data['countLogo']);

        return view('backend.contract.view-contract', $data);

        // return view('backend.layouts.home');
    }
    public function addContract()
    {
        return view('backend.contract.add-contract');
    }
  
    public function storeContract(Request $request)
    {

    
        $data = new Contract();

        $data->createy_by = Auth::user()->id;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->google = $request->google;
        
        
        $data->save();
        return redirect()->route('contracts.view')->with('success', 'Contract Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editContract($id)
    {
        $editData = Contract::find($id);
        //dd( $editData);
        return view('backend.contract.edit-contract',compact('editData'));
    }
    public function updateContract(Request $request,$id)
    {
        $data = Contract::find($id);
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->google = $request->google;
        $data->update_by = Auth::user()->id;
        
        
        $data->save();
        return redirect()->route('contracts.view')->with('success', 'Edit Slider Successfully');
    }
    
    public function deleteContract($id)
    {
        $contract = Contract::find($id);

       
        $contract->delete();
        return redirect()->route('contracts.view')->with('success', 'Contract Deleted Successfully');
    }
}
