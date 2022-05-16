<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function basicInfo(Request $request)
    {
        return view('profile.basic_info');
    }
    public function education(Request $request)
    {
        return view('profile.education');
    }
    public function training(Request $request)
    {
        return view('profile.training');
    }
    public function work(Request $request)
    {
        return view('profile.work');
    }
    public function family(Request $request)
    {
        return view('profile.family');
    }
}
