@extends('layouts.default')
@section('title','登录')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登录</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')
                <form action="{{route('login')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="email">邮箱:</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="">密码</label>
                        <input type="password" name="password" class="form-control" value="{{old('password')}}">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember">
                            记住我
                        </label>

                    </div>
                    <input type="submit" class="btn btn-primary" value="登录">
                </form>
                <hr>
                <p>还没账号? <a href="{{route('signup')}}">现在注册！</a></p>
            </div>
        </div>
    </div>
@endsection