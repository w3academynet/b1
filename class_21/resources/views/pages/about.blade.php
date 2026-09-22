@extends('layout')

@section('content')
    <div style="padding: 40px 20px; max-width: 800px; margin: 0 auto;">
        <h1>{{ $content['title'] }}</h1>
        <p>{!! $content['content'] !!}</p>
    </div>
@endsection