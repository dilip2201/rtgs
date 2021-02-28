<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = User::where('type','company')->where('status','1')->count();
        return view('admin.dashboard.index',compact('companies'));
    }
}