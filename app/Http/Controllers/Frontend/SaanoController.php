<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Event;

class SaanoController extends Controller
{
    public function Index()
    {
        return view('saanosahayog.index');
    }

    public function About()
    {
        return view('saanosahayog.about-us');
    }

    public function Event()
    {
        $getevent = Event::where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view ('saanosahayog.event' , compact('getevent'));
    }

    public function eventDetail($id)
    {
        $getevent = Event::where('id',$id)
                   ->where('status','=', 1)
                   ->orderBy('id','desc')->get();
        return view ('saanosahayog.applyevent' , compact('getevent'));
    }

    public function Contact()
    {
        return view('saanosahayog.contact-us');
    }
}