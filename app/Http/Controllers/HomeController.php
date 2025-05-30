<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('frontend.index');
    }
   public function contact(){
    return view('frontend.contact');
   }
   public function faq(){
    return view('frontend.faq');
   }
   public function career(){
    return view('frontend.career');
   }
   public function about(){
    return view('frontend.about');
   }
}
