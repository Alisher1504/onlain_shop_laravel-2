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

                <form action="{{ url('admin/colors/store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-7 my-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                
                        <div class="col-md-7 my-3">
                            <input type="text" name="color" class="form-control" placeholder="Color" required>
                        </div>
                
                        <div style="display: flex; align-items: center;" class="mb-3">
                            <input style="width: 30px; height: 30px;" type="checkbox" name="status">  
                            <label class="mx-2" for="">Status</label>
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