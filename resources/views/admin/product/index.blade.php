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
                            Product

                            <a href="{{ url('admin/product/create') }}" class="btn btn-primary btn-sm float-end">add product</a>

                        </h3>

                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Category_id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Selling_price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($products as $item)
                              <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>
                                    @if ($item->category)
                                        {{ $item->category->name }}
                                    @else
                                        No category
                                    @endif
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->selling_price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->status == '1' ? 'Hidden' : 'Visable'}}</td>
                                <td>
                                    <a href="{{ url('admin/product/edit/'. $item->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ url('admin/product/delete/'. $item->id) }}" class="btn btn-danger">Delete</a>
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
