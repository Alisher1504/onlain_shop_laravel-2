@extends('layouts.app')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($slider as $item)

        <div class="carousel-item active">
            <img src="{{ asset('uploads/slider/'.$item->image) }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">
                    <h1>
                        <span>{!! $item->title !!}</span>
                    </h1>
                    <p>
                        {!! $item->description !!}
                    </p>
                    <div>
                        <a href="#" class="btn btn-slider">
                            Get Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h4>Welcome to Alisher eCommerce</h4>
                <div class="underline mx-auto"></div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique perspiciatis cumque qui
                    accusamus voluptates omnis nostrum, vel ullam quia, architecto sequi dignissimos rem ratione
                    corporis rerum blanditiis tenetur, magnam neque? Quisquam minus necessitatibus, adipisci
                    perspiciatis, et dolore quo ut at enim, provident cupiditate praesentium corporis voluptas?
                    Accusamus consequuntur minus consequatur voluptates natus non at officiis assumenda recusandae
                    architecto. Perferendis iste quae, dolores, eaque aspernatur aut nobis odit repellat quod libero
                    corrupti eligendi neque, cumque dicta voluptatem fugit adipisci natus at sit suscipit? Ad odio
                    cupiditate fugit officia numquam? Sit autem neque sapiente doloribus dicta deserunt facere tempore
                    in libero.
                </p>

            </div>
        </div>
    </div>
</div>


<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4>Trending Product</h4>
                <div class="underline"></div>
            </div>

            @if ($trendingProduct)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme trending-product">
                    @foreach ($trendingProduct as $item)
                        <div class="item">
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
                    @endforeach
                </div>
            </div>

            @else
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Product Aviable</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h4>New Arrive Product</h4>
                <div class="underline"></div>
            </div>

            @if ($newArrive)
            <div class="col-md-12">
                <div class="owl-carousel owl-theme trending-product">
                    @foreach ($newArrive as $item)
                        <div class="item">
                            <div class="product-card">
                                <div class="product-card-img">
                                    <label class="stock bg-danger">New</label>

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

            @else
            <div class="col-md-12">
                <div class="p-2">
                    <h4>No Product Aviable</h4>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>


@endsection

@section('script')

<script>
    $('.trending-product').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
</script>

@endsection