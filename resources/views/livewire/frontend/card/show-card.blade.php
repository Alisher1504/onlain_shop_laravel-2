<div>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <h4>My cart</h4>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="shopping-cart">

                        <div class="cart-header d-none d-sm-none d-mb-block d-lg-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Products</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Quantity</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>

                        @forelse ($card as $item)
                            @if ($item->product)
                                <div class="cart-item">
                                    <div class="row">
                                        <div class="col-md-6 my-auto">
                                            <a href="{{ url('collections/'.$item->product->category->slug.'/'.$item->product->slug) }}">
                                                @if ($item->product->image)
                                                    <label class="product-name">
                                                        <img src="{{ asset('uploads/product/'. $item->product->image) }}" style="width: 100px; height: 100px" alt="">
                                                        {{ $item->product->name }}
                                                    </label>
                                                @else
                                                    <img src="" style="width: 100px; height: 100px" alt="">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="col-md-2 my-auto">
                                            <label class="price">${{ $item->product->selling_price }}</label>
                                        </div>
                                        <div class="col-md-2 col-7 my-auto">
                                            <div class="quantity">
                                                <div class="input-group">
                                                    <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                                    <input type="text" value="{{ $item->quantity }}" class="input-quantity" />
                                                    <span class="btn btn1"><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-5 my-auto">
                                            <div class="remove">
                                                <a href="" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <div>No card items Aviable</div>
                        @endforelse

                        

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>