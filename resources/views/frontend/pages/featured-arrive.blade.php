@extends('layouts.app')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4>Featured Product</h4>
                <div class="underline"></div>
            </div>

            
                @forelse ($featured as $item)
                    <div class="col-md-3">
                        <div class="product-card">
                                <div class="product-card-img">
                                    <label class="stock bg-success">New</label>

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
                @empty
                    <div class="col-md-12 p-2">
                        <h4>No Featured Product Aviable</h4>
                    </div>
                @endforelse
                    
                <div class="text-center">
                    <a href="{{ url('collections') }}" class="btn btn-warning">View more</a>
                </div>
        </div>
    </div>
</div>
@endsection