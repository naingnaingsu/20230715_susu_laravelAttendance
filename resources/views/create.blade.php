@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>打刻ページ</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">お疲れ様でした</div>
                <div class="card-body">
                    <form class="attendance">
                        <a href="/attendance/start" class="stamp_link" name="start_time" action="{{route('startAttendance')}}" method="post">出勤開始</a>
                        <a href="/attendance/end" class="stamp_link">退勤終了</a>
                    </form>
                    <div class="rest">
                        <a href="/break/start" class="stamp_link">休憩開始</a>
                        <a href="/break/end" class="stamp_link">休憩終了</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</body>
</html>

@endsection
