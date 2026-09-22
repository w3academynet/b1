<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
</head>
<body>
    <nav style="background: #f5f5f5; padding: 15px 20px; border-bottom: 1px solid #ddd;">
        <a href="{{ route('home') }}" style="margin-right: 15px;">Home</a>
        <a href="{{ route('about') }}" style="margin-right: 15px;">About</a>
        {{-- <a href="{{ route('products') }}" style="margin-right: 15px;">Products</a> --}}
        <a href="{{ route('contact') }}">Contact</a>
    </nav>