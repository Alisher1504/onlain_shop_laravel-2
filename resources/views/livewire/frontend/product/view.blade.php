<div>

    <div class="py-3 py-md-5 bg-light ">
        <div class="container card py-3">
            @if(session()->get('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        <img src="{{ asset('uploads/product/'. $product->image) }}" class="w-100" alt="Img">
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{ $product->name }}
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{ $product->category->name }} / {{ $product->name }}
                        </p>
                        <div>
                            <span class="selling-price">${{ $product->selling_price }}</span>
                            <span class="original-price">${{ $product->original_price }}</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1" wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model="quantityCount" value="{{ $this->quantityCount }}"
                                    class="input-quantity" />
                                <span class="btn btn1" wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">

                            <button wire:click="addToCard({{ $product->id }})" type="button" class="btn btn1">
                                <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>

                            <button type="button" wire:click="addToWisherlist({{ $product->id }})" readonly
                                class="btn btn1">
                                <span wire:loading.remove wire:tagret="addToWisherlist">
                                    <i class="fa fa-heart"></i> Add To Wishlist
                                </span>
                                <span wire:loading wire:tagret="addToWisherlist">Adding...</span>
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                {!! $product->small_description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 py-md-5 bg-white ">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h1>Related @if($category) <b>{{ $category->name }}</b> @endif Products</h1>
                    <div class="underline"></div>
                </div>

                @forelse ($category->products as $item)
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

            </div>
        </div>
    </div>
</div>