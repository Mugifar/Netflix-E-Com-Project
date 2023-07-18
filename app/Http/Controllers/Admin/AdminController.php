<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MoviesAdd;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.home');
    }

    public function AddMovies(){
        return view('admin.sellers');
    }

    public function AddMoviesStore(Request $request){

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

    public function Profile(){
        return view('admin.profile');
    }



}


