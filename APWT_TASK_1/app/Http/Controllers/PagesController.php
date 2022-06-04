<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function teams()
    {
        return view('pages.team');
    }

    public function aboutus()
    {
        return view('pages.about');
    }

    public function contactus()
    {
        return view('pages.contact');
    }

    public function product()
    {
        $courses = array();
        for($i=0; $i<15; $i++)
        {
            $course = array
            (
                "id"=>$i+1,
                "name"=>"Course " . ($i+1),
                "price"=>"BDT 1998"
            );

            $course = (object)$course;
            $courses[] = $course;
        }
        return view('pages.product')
        ->with('courses',$courses);
    }
}
