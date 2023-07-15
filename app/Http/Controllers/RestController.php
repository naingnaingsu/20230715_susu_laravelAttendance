<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RestController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function startBreak(Request $request)
  {
    $id = Auth::id();
    $dt = new Carbon();
    $time = $dt->toTimeString();
    \DB::table('rests')->insert(['start_time'=>$time,
    'attendance_id'=>$id]);
    return '休憩開始';
  }

      public function endBreak(Request $request)
  {
    $id = Auth::id();
    $dt = new Carbon();
    $time = $dt->toTimeString();
    \DB::table('rests')->insert(['end_time'=>$time,
    'attendance_id'=>$id]);
    return '休憩終了';
  }
}
