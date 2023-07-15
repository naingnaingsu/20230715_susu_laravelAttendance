@extends('layouts.app')

@section('content')

<h1>ユーザー一覧</h1>

<table class="user_list">
  <thead>
    <tr>
      <th>ユーザーid</th>
      <th>名前</th>
      <th>メールアドレス</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
      <th>{{$user->id}}</th>
      <th>{{$user->name}}</th>
      <th>{{$user->email}}</th>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection

