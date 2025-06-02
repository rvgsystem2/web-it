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
   public function jobs(){
    return view('frontend.jobs');
   }
   public function employee(){
    return view('frontend.employee');
   }
   public function service(){
    return view('frontend.service');
   }
   public function appdevelopment(){
    return view('frontend.appdevelopment');
   }
   public function bussiness_process(){
    return view('frontend.bussiness_process');
   }
   public function bussiness_solution(){
    return view('frontend.bussiness_solution');
   }
   public function cyber_security(){
    return view('frontend.cyber_security');
   }
   public function web_development(){
    return view('frontend.web_development');
   }
   public function iande_design(){
    return view('frontend.iande_design');
   }
   public function blog(){
    return view('frontend.blog');
   }
   public function team(){
    return view('frontend.team');
   }
   public function privacy_policy(){
    return view('frontend.privacy_policy');
   }
   public function terms_condition(){
    return view('frontend.terms_condition');
   }
}

