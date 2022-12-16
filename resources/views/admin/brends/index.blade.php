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
                            Brend list

                            <a href="{{ url('admin/brends/create') }}" class="btn btn-primary btn-sm float-end">add Brend</a>

                        </h3>

                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($brends as $item)
                              <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->status == '1' ? 'Hidden' : 'Visable'}}</td>
                                <td>
                                    <a href="{{ url('admin/brends/update/'. $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/brends/delete/'. $item->id) }}" class="btn btn-danger">Delete</a>
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
