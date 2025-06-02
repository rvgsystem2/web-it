<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\JobListing;
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
   public function career(Request $request){
        $categories = Category::all();
        if ($request->slug){
            $category = Category::where('slug', $request->slug)->first();
            $jobs = JobListing::where('category_id', $category->id)->get();
        }elseif($request->keywords){
            $jobs = JobListing::where('skills', 'LIKE', "%$request->keywords%")->get();
        }else{
            $jobs = JobListing::all();
        }

        return view('frontend.career', compact('categories', 'jobs'));
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
   public function applyForJob(JobListing $job){
    return view('frontend.applyForJob', compact('job'));
   }

   public function profile(){
        return view('frontend.profile');
   }
}
