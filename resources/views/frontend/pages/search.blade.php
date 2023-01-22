@extends('layouts.app')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <h4>New arriver</h4>
                <div class="underline"></div>
            </div>

            
                @forelse ($searchProduct as $item)

                    <div class="col-md-10">
                        <div class="product-card">
                            
                            <div class="row p-3">
                                <div class="col-md-3">
                                    <div class="product-card-img">
                                        <label class="stock bg-success">New</label>
    
                                        <img src="{{ asset('uploads/product/'. $item->image) }}" alt="Laptop">
    
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="product-card-body">
                                        <h5 class="product-name">
                                            <a href="{{ url('/collections/'. $item->category->slug. '/' . $item->slug) }}">
                                                {{ $item->name }}
                                            </a>
                                        </h5>
                                        <div>
                                            <span class="selling-price">${{ $item->selling_price }}</span>
                                            <span class="original-price">${{ $item->original_price }}</span>
                                        </div>
                                        
                                        <p>
                                            <b>Description :</b> {{ $item->description }}
                                        </p>

                                        <a href="{{ url('/collections/'.$item->category->slug. '/' .$item->slug) }}" class="btn btn-outline-primary">
                                            View
                                        </a>

                                    </div>
                                </div>
                            </div>   
                                
                        </div>
                    </div>

                @empty
                    <div class="col-md-12 p-2">
                        <h4>No Product Aviable</h4>
                    </div>
                @endforelse

                <div class="col-md-10">
                    {{ $searchProduct->appends(request()->input())->links() }}
                </div>
    
        </div>
    </div>
</div>
@endsection