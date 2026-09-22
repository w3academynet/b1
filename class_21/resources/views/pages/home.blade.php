@extends('layout')
    
@section('content')
    <div style="padding: 40px 20px; max-width: 800px; margin: 0 auto;">
        <h1>Home Page</h1>
        <p>Welcome to the home page.</p>
        <x-button>
                @section('button-text', 'Press Me')
        </x-button>
    </div>

    <x-newsletter-form />
@endsection
