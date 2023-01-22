@extends('layouts.app')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4>Trending Product</h4>
                <div class="underline"></div>
            </div>

            
                @forelse ($newArrive as $item)
                    <div class="col-md-3">
                        <a href="{{ url('/collections/'. $item->category->slug. '/' . $item->slug) }}">
                        <div class="product-card">
                                <div class="product-card-img">
                                    <label class="stock bg-success">New</label>

                                    <img src="{{ asset('uploads/product/'. $item->image) }}" alt="Laptop">

                                </div>
                                <div class="product-card-body">
                                    <h5 class="product-name">
                                        
                                            {{ $item->name }}
                                        
                                    </h5>
                                    <div>
                                        <span class="selling-price">${{ $item->selling_price }}</span>
                                        <span class="original-price">${{ $item->original_price }}</span>
                                    </div>
                                    
                                </div>
                        </div>
                    </a>
                    </div>
                @empty
                    <div class="col-md-12 p-2">
                        <h4>No Product Aviable</h4>
                    </div>
                @endforelse
                    
                <div class="text-center">
                    <a href="{{ url('collections') }}" class="btn btn-warning">View more</a>
                </div>
        </div>
    </div>
</div>
@endsection