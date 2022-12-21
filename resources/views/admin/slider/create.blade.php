@extends('layouts.admin')

@section('content')

<main id="main" class="main">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <h3>
                    Slider

                    <a href="{{ url('admin/slider') }}" class="btn btn-primary btn-sm float-end">Back</a>

                </h3>

            </div>
            <div class="card-body">

                <form action="{{ url('admin/slider/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="my-3">
                            <input type="text" name="title" class="form-control" placeholder="Title" >
                        </div>
                
                        <div class="my-3">
                            <textarea name="description" class="form-control" id="" cols="30" rows="5" ></textarea>
                        </div>
                
                        <div class="mb-3">
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div style="display: flex; align-items: center;" class="mb-3">
                            Status <input style="width: 30px; height: 30px; margin-left:10px;" type="checkbox" name="status">
                        </div>
                    </div>
                
                
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                

            </div>
        </div>
    </div>
</div>

</main>

@endsection