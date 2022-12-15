@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h3>
                            Category

                            <a href="{{ url('admin/category/create' ) }}" class="btn btn-primary btn-sm float-end">Back</a>

                        </h3>

                    </div>
                    <div class="card-body">

                        <form action="{{ url('admin/category/update/'. $category->id) }}" method="POST" enctype="multipart/form-data">
                            
                            @csrf

                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 my-3">
                                    <input type="text" class="form-control" id="" value="{{ $category->name }}" name="name">
                                </div>
    
                                <div class="col-md-6 my-3">
                                    <input type="text" class="form-control" id="" value="{{ $category->slug }}" name="slug">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $category->description }}</textarea>
                                </div>
                                
                                <div class="my-2">
                                    <img width="100px" height="100px" src="{{ url('uploads/category/'.$category->image) }}" alt="">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <input type="file" name="image" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">status</label>
                                    <input type="checkbox" id="" name="status" {{ $category->status == '1' ? 'checked':'' }}>
                                </div>
    
                                <h3>SEO TEGS</h3>
    
                                <div class=" mb-3">
                                    <input type="text" class="form-control" id="" name="meta_title" value="{{ $category->meta_title }}">
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_keyword" class="form-control" id="" cols="30" rows="5" >{{ $category->meta_keyword }}</textarea>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_description" class="form-control" id="" cols="30" rows="5">{{ $category->meta_description }}</textarea>
                                </div>
    
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-end">save</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection