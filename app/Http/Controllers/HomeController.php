<?php

namespace App\Http\Controllers;

use App\Models\CalenderEvent;
use App\Models\CAS;
use App\Models\Event;
use App\Models\EventGall;
use App\Models\Facil;
use App\Models\Gallery;
use App\Models\HomeSlider;
use App\Models\KG;
use App\Models\MYP;
use App\Models\IBDP;
use App\Models\Polices;
use App\Models\Primary;
use App\Models\ReachUs;
use App\Models\Tut;
use App\Models\Video;
use App\Models\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $school_calender = CalenderEvent::select('start', 'end', 'display', 'color', 'category', 'type', 'desc')->get()->map(function ($school_calender, $key) {
            return [
                'start' => $school_calender->start,
                'end' => $school_calender->end,
                'display' => $school_calender->display,
                'color' => $school_calender->color,
                'title' => $school_calender->type,
                'description' =>$school_calender->desc,

            ];
        });
        $eventgall = EventGall::all();
        $sliders = HomeSlider::all();
        $cards = Event::latest()->get()->take(20);
        return view('home', compact('school_calender', 'sliders', 'cards', 'eventgall'));
    }

    public function welcome()
    {
        $welcome  = Welcome::first();
        return view('welcome',  compact('welcome'));
    }

    //end of welcome

    public function reachus()
    {
        $reachus = ReachUs::first();
        return view('reachus', compact('reachus'));
    }

    //end of reachus

    public function schoolPolice()
    {
        $police = Polices::first();
        return view('schoolPolice', compact('police'));
    }

    //end of schoolPloice

    public function tuitionFees()
    {
        $tuts = Tut::all();
        return view('tuitionFees');
    }

    //end of tuitionfees

    public function applyNow()
    {
        return view('applyNow');
    }

    //end of applynow

    public function primary()
    {
        $primary = Primary::first();
        return view('primary', compact('primary'));
    }

    //end of primary

    public function KG()
    {
        $kg = KG::first();
        return view('KG', compact('kg'));
    }
    //end of KG

    public function MYP()
    {
        $myp  = MYP::first();
        return view('MYP', compact('myp'));
    }
    //end of MYP

    public function IBDP()
    {
          return view('IBDP' ,['i' => IBDP::first()]);
    }
    //end of IBDP

    public function CAS()
    {
        
        return view('CAS',['cas' => CAS::first()]);
    }
    //end of CAS

    public function calender()
    {
        $school_calender = CalenderEvent::select('start', 'end', 'display', 'color', 'category', 'type', 'desc')->get()->map(function ($school_calender, $key) {
            return [
                'start' => $school_calender->start,
                'end' => $school_calender->end,
                'display' => $school_calender->display,
                'color' => $school_calender->color,
                'title' => $school_calender->type,
                'description' =>$school_calender->desc,

            ];
        });
        $eventgall = EventGall::all();

        return view('calender', compact('school_calender', 'eventgall'));
    }
    //end of calender

    public function gallery()
    {
        $videos = Video::all();
        return view('gallery', compact('videos'));
    }
    //end of gallery

    public function getGallery($id)
    {
        $gals = Gallery::where('category_id', $id)->get();
        return view('getGallery', compact('gals'));
    }
    //end of getGallery

    public function facilities()
    {
        return view('facilities');
    }
    //end of facilities

    public function getFacilities($id)
    {
        $facs = Facil::where('category_id', $id)->get();
        return view('getFacilities', compact('facs'));
    }
    //end of getFacilities

    public function getTut(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $tut = Tut::where('class', $request->name)->first();
        return $tut;
    }

    public function media()
    {
        return view('media');
    }

    public function emailToUs(Request $request)
    {
        mail('cambridge@cambridge.edu.jo', $request->phone, $request->message);
        return redirect()->route('index');
    }
    public function getcalenders(Request $request) {
        $cal = CalenderEvent::where('type', $request->type)->get();
        return response()->json($cal, 200);
    }
    public function polices() {
        return view('policess');

    }
    public function unver_cons() {
        return view('unver_cons');

    }
}
