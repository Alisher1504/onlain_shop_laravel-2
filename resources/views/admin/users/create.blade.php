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
                        Users create

                        <a href="{{ url('admin/users') }}" class="btn btn-danger btn-sm float-end">
                            Back
                        </a>

                    </h3>

                </div>
                <div class="card-body">

                    <form action="{{ url('admin/users') }}" method="POST">

                        @csrf

                        <div class="row mt-3">

                            <div class="col-md-6 mb-3 ">
                                <div class="input-group">
                                    <label class="input-group-text">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <label class="input-group-text">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <label class="input-group-text">Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <label class="input-group-text">Role</label>
                                    <select name="role_as" class="form-control">
                                        <option value="">Select Role</option>
                                        <option value="0">User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary">Save</button>
                            </div>
    
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection