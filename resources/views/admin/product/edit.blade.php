@extends('layouts.admin')

@section('content')
<main id="main" class="main">

    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
            <div class="container bg-info bordered text-center my-3">
                <h2 class="py-3 text-white">{{ session('status') }}</h2>
            </div>
            @endif

            <div class="card">
                <div class="card-header">

                    <h3>
                        Product

                        <a href="{{ url('admin/product/create') }}" class="btn btn-primary btn-sm float-end">back</a>

                    </h3>

                </div>
                <div class="card-body">

                    <form action="{{ url('admin/product/update/'. $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <ul class="nav nav-tabs my-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                    aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="seotag-tab" data-bs-toggle="tab"
                                    data-bs-target="#seotag-tab-pane" type="button" role="tab"
                                    aria-controls="seotag-tab-pane" aria-selected="false">Seo tags</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                    data-bs-target="#details-tab-pane" type="button" role="tab"
                                    aria-controls="details-tab-pane" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="image-tab" data-bs-toggle="tab"
                                    data-bs-target="#image-tab-pane" type="button" role="tab"
                                    aria-controls="image-tab-pane" aria-selected="false">Image</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
    
                                <div class="mb-3">
                                    <label for="">category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}" {{ $category->id  == $product->category_id ? 'selected' : ''}} >
                                            {{ $category->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="slug" class="form-control" value="{{ $product->slug }}" required>
                                </div>
    
                            
    
                                <div class="mb-3">
                                    <textarea name="small_description" id="" cols="30" rows="5" class="form-control" required>{{ $product->small_description }}</textarea>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control" required>{{ $product->description }}</textarea>
                                </div>
    
                            </div>
                            <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab"
                                tabindex="0">
                            
                                <div class="mb-3">
                                    <input type="text" name="meta_title" class="form-control" value="{{ $product->meta_title }}" required>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_keyword" id="" cols="30" rows="5" class="form-control" required>{{ $product->meta_keyword }}</textarea>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_description" id="" cols="30" rows="5" class="form-control" required>{{ $product->meta_description }}</textarea>
                                </div>
    
                            </div>
                            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                                tabindex="0">
                            
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="original_price" value="{{ $product->original_price }}" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="selling_price" value="{{ $product->selling_price }}" class="form-control" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control" required>
                                    </div>

                                    <div class="col-md-4 my-3 input-group">
                                        <span class="input-group-text">trending</span>
                                        <input style="width: 50px; height: 50px;" type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked' : '' }}>
                                    </div>

                                    <div class="col-md-4 my-3 input-group">
                                        <span class="input-group-text">featured</span>
                                        <input style="width: 50px; height: 50px;" type="checkbox" name="featured" {{ $product->featured == '1' ? 'checked' : '' }}>
                                    </div>

                                    <div class="col-md-4 my-3 input-group">
                                        <span class="input-group-text">status</span>
                                        <input style="width: 50px; height: 50px;" type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }}>
                                    </div>

                                </div>
                            
                            </div>

                            <div class="tab-pane fade" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab"
                                tabindex="0">

                                <label for="">Image</label>
                                <input type="file" name="image" id="" class="form-control" required>

                                @if ($product->image)
                                    <img class="border p-2 my-3" width="400px" src="{{ url('uploads/product/'. $product->image) }}" alt="">
                                @else
                                    no Image
                                @endif

                            </div>
                        </div>
                        
                        <div class="my-3 text-center">
                            <button type="submit" class="btn btn-primary btn-sm ">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection