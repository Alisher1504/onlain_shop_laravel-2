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
                            Slider

                            <a href="{{ url('admin/slider/create') }}" class="btn btn-primary btn-sm float-end">add Slider</a>

                        </h3>

                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($slider as $item)
                                
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <img style="width: 100px" src="{{ asset('uploads/slider/'. $item->image) }}" alt="">
                                        </td>
                                        <td>{{ $item->status == '1' ? 'Hidden' : 'Visabled' }}</td>
                                        <td>
                                            <a href="{{ url('admin/slider/edit/'. $item->id) }}" class="btn btn-success">Edit</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('admin/slider/delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
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
