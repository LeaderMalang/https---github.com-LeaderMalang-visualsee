<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicViewsController extends Controller
{
    public function index()
    {
        return view('PublicPanel.index');
    }public function about()
    {
        return view('PublicPanel.about');
    }
    public function contact()
    {
        return view('PublicPanel.contact');
    }
    public function studio()
    {
        return view('PublicPanel.studio');
    }
    public function collaborators()
    {
        return view('PublicPanel.collaborators');
    }
    public function adminLogin()
    {
        return view('PublicPanel.adminLogin');
    }
    public function adminLoggedIn(Request $request)
    {
        $user=User::where(['username'=>$request->username,'password'=>$request->password])->first();
        //User existence Check 
        if($user){
            Auth::login($user);
            return redirect()->route('adminDashboard');
        }
        return redirect()->back();
    }
}
