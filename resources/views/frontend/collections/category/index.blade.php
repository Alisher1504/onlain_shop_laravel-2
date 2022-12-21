@extends('layouts.app')
@section('content')

<div class="py-3 py-md-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-4">Our Categories</h4>
            </div>
            
            @forelse ($category as $item)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/collections/'. $item->slug) }}">
                            <div class="category-card-img">
                                <img src="{{ asset('uploads/category/'. $item->image) }}" class="w-100" alt="Laptop">
                            </div>
                            <div class="category-card-body">
                                <h5>{{ $item->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <h1>not category</h1>
            @endforelse

        </div>
    </div>
</div>

@endsection
