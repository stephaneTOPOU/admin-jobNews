<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(){
        return view('frontend.auth.login');
    }
    public function authenticate(Request $request,User $user){
        $credentials = $request->only('email','password'); 
        $login = $request->email;
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(User::where('email',$login)->count() > 0 ) {

            if(Auth::attempt($credentials)){
                return redirect()->route('home');
            }
            return redirect()->back()->with('success',"Les identifiants ne correspondent pas!!!");
        }else{
            return redirect()->back()->with('success',"Les identifiants ne correspondent pas!!!!!");
        }

    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
    public function index()
    {
        return view('frontend.auth.register');
    }
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|string',
            'password' => 'required|string'
        ]);
        
        try {
            $data['password'] = bcrypt($request->password);
            User::create($data);
            return redirect()->route('login');
        } catch (Exception $e) {
            return redirect()->back()->with('success',$e->getMessage());
        }
    }
}
