@extends('layouts.app')
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">




            <div class="col-md-6">
                @if (session('status'))
                    <p class="alert alert-success">{{ session('status') }}</p>
                @endif
                <div class="card shadow">
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white">User password</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('password-check') }}" method="POST">

                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>current password</label>
                                        <input type="text" name="current_password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>password</label>
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>password confirmed</label>
                                        <input type="text" name="password_confirmed" class="form-control">
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