@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')
    {{--@include('default.content')--}}
    @php
        $contents = \Illuminate\Support\Facades\DB::select('SELECT `name`, `content` FROM `pages` WHERE `name` = ?', ['default.index']);

        foreach ($contents as $content)
        {
            echo $content->content;
        }
    @endphp
@endsection

@section('footer')
    @parent
@endsection