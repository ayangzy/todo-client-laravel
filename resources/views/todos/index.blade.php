@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 mt-5 ml-auto">
            <div class="card">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('todo.index') }}">Todos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Todos</li>
                    </ol>
                </nav>
                <div class="card-header"><a href="{{ route('todo.create') }}" class="btn btn-primary pull-right">Add Todo</a></div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($todos as $key => $todo)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>

                                <td>{{ $todo['title'] }}</td>
                                <td>{{ $todo['description']}}</td>
                                <td>{{ date('M-d-Y', strtotime($todo['createdAt'])) }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('todo.edit', ['id' => $todo['_id']]) }}" class="btn btn-primary btn-xs">Edit</a>
                                        <form action="{{ route('todo.destroy', ['id' => $todo['_id']]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this todo?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <p class="text-center">You Currently do not have any todos, Kindly create one</p>
                                </td>
                            </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
