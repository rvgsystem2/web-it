<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\blog;
use App\Models\Category;
use App\Models\Choose;
use App\Models\ChooseFeture;
use App\Models\JobListing;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    public function index(){
        $banners = Banner::where('status', 'active')->get();
        $abouts = About::all();
        $chooses = Choose::all();
        $choosesFeatures = ChooseFeture::all();
        $testimonials = Testimonial::where('status', 'active')->get();
        $servicesTitle= Service::all();
        $serviceFeature= ServiceFeature::all();
        $logos = \App\Models\Logo::all();
        return view('frontend.index', compact('banners', 'abouts', 'chooses', 'choosesFeatures', 'testimonials', 'servicesTitle', 'serviceFeature', 'logos'));
    }
   public function contact(){
    return view('frontend.contact');
   }
   public function faq(){
    // Fetch FAQs from the database
    $faqs = \App\Models\Faq::where('status', 'active')->get();
    return view('frontend.faq', compact('faqs'));
   }
   public function career(Request $request){
        $categories = Category::all();
        $slug = null;
        if ($request->slug){
            $category = Category::where('slug', $request->slug)->first();
            $jobs = JobListing::where('category_id', $category->id)->get();
            $slug = $category->slug;
        }elseif($request->keywords){
            $jobs = JobListing::where('skills', 'LIKE', "%$request->keywords%")->get();
        }else{
            $jobs = JobListing::all();
        }


        return view('frontend.career', compact('categories', 'jobs', 'slug'));
   }

   public function about(){
      $abouts = About::all();
      $logos = \App\Models\Logo::all();
      $teams=Team::all();
    return view('frontend.about', compact('abouts', 'logos', 'teams'));
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
public function blog()
{
    $logos = \App\Models\Logo::all();
    $blogs = blog::where('status', 'published')->latest()->get();

    $recentBlogs = blog::where('status', 'published')->latest()->take(3)->get();
    $categories = blog::whereNotNull('category')->pluck('category')->unique();

    return view('frontend.blog', compact('logos', 'blogs', 'recentBlogs', 'categories'));
}

public function blogDetails($id)
{
    // dd($id);
    $blog = blog::findOrFail($id);
    $recentBlogs = blog::where('status', 'published')->where('id', '!=', $id)->latest()->take(3)->get();

    return view('frontend.blogdetails', compact('blog', 'recentBlogs'));
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

   public function applyForJob(JobListing $job){
    return view('frontend.applyForJob', compact('job'));
   }

   public function profile(){
        return view('frontend.profile');
   }

    public function profileUpdate(Request $request, $id)
    {
        $user = Auth::user();

        // Ensure the logged-in user matches the profile being updated
        if ($user->id != $id) {
            abort(403, 'Unauthorized action.');
        }

        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update profile picture if uploaded
        if ($request->hasFile('profile_image')) {
            // Delete old profile picture if exists
            if ($user->profile_image && Storage::exists('public/' . $user->profile_image)) {
                Storage::delete('public/' . $user->profile_image);
            }

            // Store new file and save path
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        if ($request->hasFile('resume')) {
            if ($user->resume && Storage::exists('public/' . $user->resume)) {
                Storage::delete('public/' . $user->resume);
            }
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $user->resume_link = $resumePath;
        }

        // Update user data
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone_number = $validated['phone'] ?? null;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

}

