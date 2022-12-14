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

                        <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                            
                            @csrf

                            <div class="row">
                                <div class="col-md-6 my-3">
                                    <input type="text" class="form-control" id="" placeholder="Name" name="name">
                                </div>
    
                                <div class="col-md-6 my-3">
                                    <input type="text" class="form-control" id="" placeholder="Slug" name="slug">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <textarea name="description" class="form-control" id="" cols="30" rows="5" placeholder="Description"></textarea>
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <input type="file" name="image" class="form-control">
                                </div>
    
                                <div class="col-md-6 mb-3">
                                    <label for="">status</label>
                                    <input type="checkbox" id="" name="status">
                                </div>
    
                                <h3>SEO TEGS</h3>
    
                                <div class=" mb-3">
                                    <input type="text" class="form-control" id="" name="meta_title" placeholder="Meta_title">
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_keyword" class="form-control" id="" cols="30" rows="5" placeholder="Meta_keyword"></textarea>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_description" class="form-control" id="" cols="30" rows="5" placeholder="Meta_description"></textarea>
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