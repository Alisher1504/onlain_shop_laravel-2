@extends('layouts.app')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">



            <div class="col-md-10">
                <h4>User profil</h4>
                <div class="underline"></div>
            </div>



            <div class="card-md-10">
                @if (session('message'))
                    <p class="alert alert-success">{{ session('message') }}</p>
                @endif
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white">User Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('profil') }}" method="POST">

                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="username" value="{{ Auth::user()->name }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <input type="text" readonly value="{{ Auth::user()->email }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->userDetails->phone ?? ''}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Zip pin code</label>
                                        <input type="text" name="pin_code" value="{{ Auth::user()->userDetails->pin_code ?? ''}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <textarea name="address" id="" rows="3" class="form-control">{{ Auth::user()->userDetails->address ?? ''}}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save Date</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection