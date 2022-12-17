@extends('layouts.admin')

@section('content')


    <main id="main" class="main">

        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="container bg-info bordered text-center my-3">
                        <h2 class="py-3 text-white">{{ session('status') }}</h2>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">

                        <h3>
                            Colors

                            <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm float-end">add Colors</a>

                        </h3>

                    </div>
                    <div class="card-body">

                        

                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection