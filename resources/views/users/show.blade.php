@extends('layouts.default')
@section('title',$user->name)
{{--@section('link')--}}
    {{--<link rel="stylesheet" href="/css/show.css">--}}
{{--@stop--}}
@section('content')
    <div class="row">
        <section class="showInfo col-md-12">
            <div class="col-md-3 col-md-offset-4">
                @include('shared._user_info',['user'=>$user])
            </div>
        </section>
    </div>
@stop
