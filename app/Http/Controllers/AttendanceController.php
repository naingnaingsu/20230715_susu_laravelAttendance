<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;



use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use DateTime;

class AttendanceController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        public function startAttendance(Request $request)
    {
        $id = Auth::id();
        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        \DB::table('attendances')->insert(['start_time'=>$time,
        'date'=>$date,
        'user_id'=>\Auth::id()]);
        return '勤務開始';
    }

        public function endAttendance(Request $request)
    {
        $id = Auth::id();
        $dt = new Carbon();
        $date = $dt->toDateString();
        $time = $dt->toTimeString();
        \DB::table('attendances')->insert(['end_time'=>$time,
        'date'=>$date,
        'user_id'=>\Auth::id()]);
        return '勤務終了';
    }

        public function getAttendance(Request $request)
    {
        $attendances = Attendance::select('attendances.*')
        ->orderBy('updated_at','desc')
        //->where('user_id','=',\Auth::id())
        //->limit('0,5')
        ->get();
        
        $rests = Rest::select('rests.*')->get();

        //->orderBy('updated_at','DESC')
        //dd($attendances,$rests);
        return view('attendanceList',compact('attendances','rests'));
    }

        public function userList(Request $request)
    {
        $users = User::select('id','name', 'email')
        ->orderBy('updated_at','DESC')
        ->get();
        //dd($users);
        return view('userList',compact('users'));
    }

}

//$attendances = Attendance::select('attendances.*')
        //->where('user_id','=',\Auth::id())
        //->orderBy('updated_at');
        //return view('show'); 
//return view('show',compact('attendance'));
//$now=Carbon::now();
    //$now_format=$now->format('Y-m-d H:i:s');
    //dump($now_format);
    