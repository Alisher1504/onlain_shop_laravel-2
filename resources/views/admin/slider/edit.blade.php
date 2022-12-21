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

                <form action="{{ url('admin/slider/update/'.$slider->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="my-3">
                            <input type="text" name="title" class="form-control" value="{{ $slider->title }}">
                        </div>
                
                        <div class="my-3">
                            <textarea name="description" class="form-control" id="" cols="30" rows="5" >{{ $slider->description }}</textarea>
                        </div>
                
                        <div class="mb-3">
                            <img style="width: 200px;" src="{{ asset("$slider->image") }}" alt="">
                            <input type="file" name="image" class="form-control mt-3" >
                        </div>

                        <div style="display: flex; align-items: center;" class="mb-3">
                            Status <input style="width: 30px; height: 30px; margin-left:10px;" type="checkbox" name="status" {{ $slider->status == TRUE ? 'checked' : '0' }}>
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