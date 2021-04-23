<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsEventController extends Controller
{
    public function viewNewsEvent()
    {
        $data['allData'] = NewsEvent::all();
        

        return view('backend.news-event.view-news-event', $data);

        // return view('backend.layouts.home');
    }
    public function addNewsEvent()
    {
        return view('backend.news-event.add-news-event');
    }
  
    public function storeNewsEvent(Request $request)
    {

    
        $data = new NewsEvent();

        $data->createy_by = Auth::user()->id;
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->date = $request->date;
        if ($request->file('image')) {
            $file = $request->file('image');
            
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/news_event_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('news_events.view')->with('success', 'NewsEvent Added Successfully');
        //return view('backend.user.add-user');
        // return view('backend.layouts.home');
    }
    public function editNewsEvent($id)
    {
        $editData = NewsEvent::find($id);
        //dd( $editData);
        return view('backend.news-event.edit-news-event',compact('editData'));
    }
    public function updateNewsEvent(Request $request,$id)
    {
        $data = NewsEvent::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->date = date('Y-m-d',strtotime($request->date));
        $data->update_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/news_event_images/' . $data->image));
            $filename   = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/news_event_images'), $filename);
            $data['image'] = $filename;
        }

        
        $data->save();
        return redirect()->route('news_events.view')->with('success', 'Edit Slider Successfully');
    }
    
    public function deleteNewsEvent($id)
    {
        $news_event = NewsEvent::find($id);

        if (file_exists('upload/news_event_images/' . $news_event->image)  &&! empty($news_event->image)) {
            unlink('upload/news_event_images/' . $news_event->image);
        }

        $news_event->delete();
        return redirect()->route('news_events.view')->with('success', 'News_Events Deleted Successfully');
    }
}
