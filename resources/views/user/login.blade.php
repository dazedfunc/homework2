@extends('layout.layout')
<link href="/css/style.css" rel="stylesheet">
@section('content')
<form method="GET" action="{{route('login')}}">
    @csrf
{{--    <div class="form-group">--}}
{{--        <label>username</label>--}}
{{--        <input type="text" name="name" class="form-control">--}}
{{--        <label>username</label>--}}
{{--        <input type="text" name="password" class="form-control">--}}
{{--        <button class="btn" type="submit">Login</button>--}}

{{--    </div>--}}
    <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
            <input type="text" placeholder="Username" name="name" value="">
        </div>
        <div class="textbox">
            <input type="password" placeholder="password" name="password" value="">
        </div>
        <button class="btn" type="submit">sign in</button>
    </div>
</form>
@endsection
