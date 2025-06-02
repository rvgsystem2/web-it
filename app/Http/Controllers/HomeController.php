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

    public function updateProfile(Request $request, $id)
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
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($user->profile_picture && Storage::exists('public/' . $user->profile_picture)) {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Store new file and save path
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        // Update user data
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'] ?? null;

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
