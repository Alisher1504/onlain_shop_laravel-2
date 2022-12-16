@extends('layouts.admin')

@section('content')

    @include('admin.brends.modal')

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

                            <a class="btn btn-primary btn-sm float-end"  data-bs-toggle="modal" data-bs-target="#exampleModal">add Brend</a>

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
                              {{-- @foreach ($category as $item)
                              <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->status == '1' ? 'Hidden' : 'Visable'}}</td>
                                <td>
                                    <a href="{{ url('admin/category/edit/'. $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/delete/'. $item->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                              </tr> 
                              @endforeach --}}
                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection