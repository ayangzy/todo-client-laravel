@extends('layouts.app')

@section('content')
<div class="col-md-10">
    <div class="card mt-5">

        <div class="card-body">
            <h5 class="card-title">Create Todo</h5>
            <form action="" method="post">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title<span class="text-danger">*</span> </label>
                            <input type="text" class="form-control input-solid" name="title" id="title" value="" placeholder="Enter todo title" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description<span class="text-danger">*</span> </label>
                            <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter todo desscription.." class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Todo</button>
                        </div>
                    </div>
                </div>



            </form>
        </div>
    </div>
</div>

@endsection
