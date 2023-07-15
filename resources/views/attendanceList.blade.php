@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AttendanceList</title>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
 <main>
    <div class="container">
        <h1 class="date">日付一覧</h1>
        <table>
            <thead>
                <tr>
                    <th><a class="">日付</a></th>
                    <th><a class="">勤務開始</a></th>
                    <th><a class="">勤務終了</a></th>
                    <th><a class="">勤務時間</a></th>
                    <th><a class="">休憩時間</a></th>
                </tr> 
            </thead> 
            <tbody>    
                @foreach($attendances as $attendance)
                <tr>
                    <td>{{$attendance->date}}</td>
                    <td>{{$attendance->start_time}}</td>
                    <td>{{$attendance->end_time}}</td>
                    <td>totalAttendance</td>
                    <td>totalRest</td>
                </tr>
                @endforeach            
            </tbody>
        </table> 
    </div>
</main>    
</body>
</html>
 
@endsection
