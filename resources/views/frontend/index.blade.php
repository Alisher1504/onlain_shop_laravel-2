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
            <div class="col-md-8">
                <h4>Welcome to Alisher eCommerce</h4>
                <div class="underline"></div>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae similique perspiciatis cumque qui accusamus voluptates omnis nostrum, vel ullam quia, architecto sequi dignissimos rem ratione corporis rerum blanditiis tenetur, magnam neque? Quisquam minus necessitatibus, adipisci perspiciatis, et dolore quo ut at enim, provident cupiditate praesentium corporis voluptas? Accusamus consequuntur minus consequatur voluptates natus non at officiis assumenda recusandae architecto. Perferendis iste quae, dolores, eaque aspernatur aut nobis odit repellat quod libero corrupti eligendi neque, cumque dicta voluptatem fugit adipisci natus at sit suscipit? Ad odio cupiditate fugit officia numquam? Sit autem neque sapiente doloribus dicta deserunt facere tempore in libero.
                </p>

            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>


@endsection