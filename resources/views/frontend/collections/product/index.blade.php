@extends('layouts.app')
@section('title')
    {{ $category->meta_title }}
@endsection

@section('mete_keyword')
    {{ $category->mete_keyword }}
@endsection

@section('meta_description')
    {{ $category->meta_description }}
@endsection
@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Products</h4>
            </div>
            
            @foreach ($product as $item)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            @if($item->quantity > 0)
                                <label class="stock bg-success">In Stock</label>
                            @else
                                <label class="stock bg-success">Ouy of Stock</label>
                            @endif
                            <img src="{{ asset('uploads/product/'. $item->image) }}" alt="Laptop">
                            
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">{{ $item->brend }}</p>
                            <h5 class="product-name">
                            <a href="{{ url('/collections/'. $item->category->slug. '/' . $item->slug) }}">
                                    {{ $item->name }}
                            </a>
                            </h5>
                            <div>
                                <span class="selling-price">{{ $item->selling_price }}</span>
                                <span class="original-price">{{ $item->original_price }}</span>
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                <a href="" class="btn btn1"> View </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@endsection
