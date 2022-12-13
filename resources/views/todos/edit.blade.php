@extends('layouts.app')

@section('content')
<div class="col-md-10">
    <div class="card mt-5">
        <div class="card-body">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('todo.index') }}">Todos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Todo</li>
                </ol>
            </nav>
            <form action="{{ route('todo.update', ['id' => $todo['_id']])}}" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title<span class="text-danger">*</span> </label>
                            <input type="text" class="form-control input-solid" name="title" id="title" value="{{ $todo['title'] }}" placeholder="Enter todo title" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description<span class="text-danger">*</span> </label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter todo desscription.." class="form-control" required>{{ $todo['description'] }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update Todo</button>
                        </div>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>

@endsection
