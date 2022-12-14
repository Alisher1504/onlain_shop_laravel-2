@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

            @if (session('status'))
                <div class="container bg-info bordered text-center my-3">
                    <h2 class="py-3 text-white">{{ session('status') }}</h2>
                </div>
            @endif

        <section class="section dashboard">
            
        </section>

    </main>
@endsection
