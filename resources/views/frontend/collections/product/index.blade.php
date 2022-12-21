@extends('layouts.app')
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
                            <label class="stock bg-success"></label>
                            <img src="hp-laptop.jpg" alt="Laptop">
                        </div>
                        <div class="product-card-body">
                            <p class="product-brand">{{ $item->name }}</p>
                            <h5 class="product-name">
                            <a href="">
                                    HP Laptop 
                            </a>
                            </h5>
                            <div>
                                <span class="selling-price">$500</span>
                                <span class="original-price">$799</span>
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
