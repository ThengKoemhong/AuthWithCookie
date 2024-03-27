<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use App\Models\AuthUser;
class LoginController extends Controller
{
    public function index(Request $request ){
            $value = $request->cookie('user_id');
            $user = AuthUser::find($value);
            if (Cookie::get('user_id') != null) {
                 return view('homepage',['user', $user]);
                // return $user;
            }else{
                return view('homepage');
            }
        
    }
    public function login(){
        return view('auth.userlogin');
    }
    public function register(){
        return view('auth.usersignup');
    }
    public function logout( Request $request){
        if($request->input('signup'))
        {
             return redirect('/register');
        }else if($request->input('login')){
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if(Auth::attempt($credentials))
            {
            
                return true;
            }
            return back()->withErrors([
                'email' => 'Your provided credentials do not match in our records.',
            ])->onlyInput('email');
    
        }
    }
    public function postregister(Request $request){
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        if($request->input('register')){
            $user = new AuthUser();
            $user->username = $username;
            $user->email = $email;
            $user->password = $password;
            $user->save();
          
            $minutes = 60;
            $response = new Response('Set Cookie');
            $response = Cookie::queue('user_id', $user->id, 60); 
            return  redirect('/');
        }else{
            return false;
        }
    }
    
public function getDataFromCookie(Request $request)
{
    $value = $request->cookie('user_id');
    $user = AuthUser::find($value);
    // if ($user) {
    //     return $user;
    // } else {
    //     // User not found
    //     return response()->json(['error' => 'User not found'], 404);
    // }
      return $value;
}
}
