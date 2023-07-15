<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
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
        $now= Carbon::now();
        $now_format= $now->format('Y-m-d H:i:s');
        dump($now_format);
        return view('create');
    }
}
//$attendances=AttendanceDB::select('attendances.*')
        //->where('user_id','=',\Auth::id())
        //->orderBy('date','ASC')
        //->get();
        //dd($attendances);
