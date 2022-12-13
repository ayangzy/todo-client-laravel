@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 mt-5 ml-auto">
            <div class="card">
                <div class="card-header"><a href="{{ route('todo.create') }}" class="btn btn-primary pull-right">Add Todo</a></div>

                <div class="card-body">

                    <p>You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
