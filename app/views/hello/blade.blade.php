@extends('hello.layout')
@section('content')
<p>Content</p>
@stop

@section('head')
@parent
<p>HEAD</p>
@stop
<ul>
    @foreach($list as $num)
         <li>{{{$num}}}</li>
    @endforeach

    @if($ival >10 )
    <p>Ival > 10</p>
    @else
    <p>Ival is less then 10</p>
    @endif

    @include('hello.sub')
</ul>
