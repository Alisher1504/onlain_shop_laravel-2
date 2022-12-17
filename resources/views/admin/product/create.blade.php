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

                    <form action="">

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
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
    
                                <div class="mb-3">
                                    <label for="">category</label>
                                    <select name="category_id" id="" class="form-control">
                                        @foreach ($categorys as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="slug" class="form-control" placeholder="Slug">
                                </div>
    
                                <div class="mb-3">
                                    <label for="">Brend</label>
                                    <select name="brend" id="" class="form-control">
                                        @foreach ($brends as $brend)
                                            <option value="{{ $brend->id }}">{{ $brend->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="small_description" class="form-control" placeholder="Small_description">
                                </div>
    
                                <div class="mb-3">
                                    <input type="text" name="description" class="form-control" placeholder="Description">
                                </div>
    
                            </div>
                            <div class="tab-pane fade" id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab"
                                tabindex="0">
                            
                                <div class="mb-3">
                                    <input type="text" name="meta_title" class="form-control" placeholder="Meta_title">
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_keyword" id="" cols="30" rows="5" placeholder="meta_keyword" class="form-control"></textarea>
                                </div>
    
                                <div class="mb-3">
                                    <textarea name="meta_description" id="" cols="30" rows="5" placeholder="Meta_description" class="form-control"></textarea>
                                </div>
    
                            </div>
                            <div class="tab-pane fade" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab"
                                tabindex="0">
                            
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="number" name="original_price" placeholder="Original_price" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="selling_price" placeholder="Selling_price" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" name="quantity" placeholder="quantity" class="form-control">
                                    </div>
                                    <div class="col-md-4 my-3">
                                        <input style="width: 30px; height: 30px;" type="checkbox" name="trending" placeholder="">
                                    </div>
                                    <div class="col-md-4 my-3">
                                        <input style="width: 30px; height: 30px;" type="checkbox" name="status" placeholder="">
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-sm ">Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection