<?php

namespace App\Http\Controllers;

use App\Models\MoviesAdd;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 2])) {
            $user = User::where('email', $email)->first();
            Auth::login($user);
            Session::put('user', $user);
            return redirect('/home');
        } elseif (Auth::attempt(['email' => $email, 'password' => $password, 'role' => 1])) {
            $user = User::where('email', $email)->first();
            Auth::login($user);
            Session::put('user', $user);
            return redirect('/admindashboard');
        } else {
            return back()->withErrors(['Invalid credentials']);
        }
    }


    function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);
        return redirect('/subscribe');
    }


    public function logout()
    {
        Session::forget('user');
        Auth::logout();
        return redirect('/');
    }


    public function Submit(Request $request)
    {
        $email = $request->input('email');
        $user = DB::table('users')->where('email', $email)->get();
         if ($user) {
            // User exists, show login view
            return view('auth.login', compact('email'));
        } else  {
            // User does not exist, show registration view
            return view('auth.register');
        }
    }







//Google login

public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

//Google Call back

public function handleGoogleCallback(Request $request)
{
    $user = Socialite::driver('google')->stateless()->user();

    if ($user) {
        $finduser = User::where('google_id', $user->id)->first();
        if ($finduser) {
            Auth::login($finduser);
            Session::put('user', $user);
            return redirect('/home');
        } else {
            $new_user = new User();
            $new_user->name = $user->name;
            $new_user->email = $user->email;
            $new_user->password = bcrypt('123456');
            $new_user->google_id = $user->id;
            $new_user->save();
            Auth::login($new_user);
            $request->session()->put('user', $user);
            return redirect('/home');
        }
    } else {
        // Handle the case when the user object is null
        return redirect()->back()->with('error', 'Failed to retrieve user data from Google.');
    }
}


//facebook login

public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

//facebook call back

public function handleFacebookCallback()
{
    return Socialite::driver('facebook')->user();
}


//Forgot Password
    public function showforgotpasswordform()
    {
        return view('auth.forgotpassword');
    }

    public function submitforgotpasswordform(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users'
        ]);
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgotpassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Password');
        });
        return back()->with('message', 'we have emailed you reset password link');
    }

    public function showresetpasswordform($token)
    {
        return view('auth.forgotpasswordlink', ['token' => $token]);
    }

    public function submitresetpasswordform(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);
        $password_reset_request = DB::table('password_resets')
            ->where('email', $request->input('email'))
            ->where('token', $request->token)
            ->first();

        if (!$password_reset_request) {
            return back()->with('error', 'Invalid Token!');
        }

        User::where('email', $request->input('email'))
            ->update(['password' => Hash::make($request->input('password'))]);

        DB::table('password_resets')
            ->where('email', $request->input('email'))
            ->delete();

        return redirect('/log')->with('message', 'Your password has been changed');
    }

    public function Search(Request $request)
    {
        $query = $request->input('query');
        $search = MoviesAdd::query();

        if (!empty($query)) {
            $search->where('name', 'LIKE', '%' . $query . '%');
        }

        $movies = $search->get();
        $trendings = []; // Define the $trendings variable here
         $webseries = [];// Define the $webseries variable here

        return view('home.home', compact('movies','trendings','webseries'));
    }
}
