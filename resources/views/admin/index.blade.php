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
                    <h1>4</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">view</a>
                </div>
            </div>

        </div>

    </main>
@endsection