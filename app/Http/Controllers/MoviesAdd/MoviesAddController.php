<?php

namespace App\Http\Controllers\MoviesAdd;

use App\Http\Controllers\Controller;
use App\Models\MoviesAdd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoviesAddController extends Controller
{
    public function Home()
    {
        $subscriptionPlan = User::where('id', Auth::user()->id)->value('subscription');
        $categories = "Web Series";
        if ($subscriptionPlan == 'free') {
            $trendings = MoviesAdd::where('genres','free')->OrderBy('id', 'desc')->take('12')->get();
            $webseries = MoviesAdd::where('category', $categories)->where('genres','free')->get();
            $movies = MoviesAdd::where('genres', 'free')->get();
        } elseif ($subscriptionPlan == 'basic') {
            $trendings = MoviesAdd::where('genres','basic')->OrderBy('id', 'desc')->take('12')->get();
            $webseries = MoviesAdd::where('category', $categories)->where('genres','basic')->get();
            $movies = MoviesAdd::where('genres', 'basic')->where('genres', 'basic')->get();
        } elseif ($subscriptionPlan == 'premium') {
            $trendings = MoviesAdd::where('genres','premium')->OrderBy('id', 'desc')->take('12')->get();
            $webseries = MoviesAdd::where('category', $categories)->where('genres','premium')->get();
            $movies = MoviesAdd::get();
        }



        $categories = "Web Series";

        return view('home.home', compact('movies', 'trendings', 'webseries'));
    }

    public function detail($id)
    {
        $data = MoviesAdd::find($id);
        return view('home.detail', ['movies' => $data]);
    }

    public function MoviesAdd(Request $request)
    {

        $user = new MoviesAdd();
        $user->name = $request->input('name');
        $user->category = $request->input('category');
        $user->cast = $request->input('cast');
        $user->language = $request->input('language');
        $user->year = $request->input('year');
        $user->runtime = $request->input('runtime');
        $user->genres = $request->input('genres');
        $user->discription = $request->input('discription');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $request->validate(['image' => 'required|image|mimes:png,jpg,webp|max:3072']);
            $extension = $image->getClientOriginalExtension();
            $imagename = time() . '.' . $extension;
            $image->move('uploads/storeimages', $imagename);
            $user->image = $imagename;
        }

        if ($request->hasFile('movie_clip')) {
            $video = $request->file('movie_clip');
            $request->validate(['movie_clip' => 'required|mimes:mp4|max:100000']);
            $extension = $video->getClientOriginalExtension();
            $videoname = time() . '.' . $extension;
            $video->move('uploads/storevideos', $videoname);
            $user->movie_clip = $videoname;
        }

        $user->save();

        return back()->withSuccess('You have successfully uploaded!');
    }

    public function Contacts(){
        return view('home.contact');
    }

    public function AboutUs(){
        return view('home.aboutas');
    }
}
