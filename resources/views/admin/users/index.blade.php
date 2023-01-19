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
                        Users

                        <a href="{{ url('admin/users/create') }}" class="btn btn-primary btn-sm float-end">
                            add Users
                        </a>

                    </h3>

                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role_as</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->role_as == '0')
                                        <label class="btn btn-primary">User</label>
                                    @elseif ($item->role_as == '1')
                                        <label class="btn btn-success">Admin</label>
                                    @else
                                        <label class="btn btn-danger">none</label>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('admin/users/'. $item->id. '/edit') }}"
                                        class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/users/delete/'. $item->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</main>
@endsection