@extends('layouts.admin')

@section('content')

<main id="main" class="main">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <h3>
                    Category

                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Back</a>

                </h3>

            </div>
            <div class="card-body">

                <form action="{{ url('admin/brends/edit/'. $brends->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 my-3">
                            <input type="text" name="name" class="form-control" value="{{ $brends->name }}" required>
                        </div>
                
                        <div class="col-md-6 my-3">
                            <input type="text" name="slug" class="form-control" value="{{ $brends->slug }}" required>
                        </div>
                
                        <div class="mb-3">
                            <input type="checkbox" name="status" {{ $brends->status == TRUE ? 'checked' : '' }}>  
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