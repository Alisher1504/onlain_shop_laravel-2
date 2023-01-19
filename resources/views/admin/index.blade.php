@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        @if (session('status'))
        <div class="container bg-info bordered text-center my-3">
            <h2 class="py-3 text-white">{{ session('status') }}</h2>
        </div>
        @endif

        <div class="me-md-3 me-xl-5">

            <h2>Dashboard</h2>
            <p>You analitic dashboard template</p>
            <hr>

        </div>

        <div class="row">

            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <h1>Total Order</h1>
                    <h1>{{ $totalorder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <h1>Today Order</h1>
                    <h1>{{ $todayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <h1>This Month Order</h1>
                    <h1>{{ $monOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <h1>This Year Order</h1>
                    <h1>{{ $yearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <h1>Total Product</h1>
                    <h1>{{ $product }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <h1>Today Category</h1>
                    <h1>{{ $category }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <h1>Total All User</h1>
                    <h1>{{ $totalUser }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <h1>Total User</h1>
                    <h1>{{ $user }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-body bg-dark text-white mb-3">
                    <h1>Today Admin</h1>
                    <h1>{{ $admin }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

        </div>

    </main>
@endsection