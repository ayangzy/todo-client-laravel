@extends('auth.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todos</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h1>Welcome to Todo Client App. Kindly <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Sign In</a> or <a href="{{ route('register') }}" class="btn btn-primary btn-sm">Sign Up</a> to create your todos</h1>
    </div>

</body>
</html>
@endsection
