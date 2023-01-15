@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h3>Orders</h3>

                    </div>

                    <div class="card-body">
                        <div class="shadow bg-white p-3">
                            <h4 class="text-primary">
                                <i class="fa fa-shopping-cart text-dark">My order detailes</i>
                                <a href="{{ url('orders') }}" class="btn btn-danger float-end">Back</a>
                            </h4>
                            <hr>
    
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Order Detailes</h5>
                                    <hr>
                                    <h6>Order Id: {{ $order->id }}</h6>
                                    <h6>Order Date: {{ $order->created_at->format('d-m-y') }}</h6>
                                    <h6>Payment Made: {{ $order->payment_mode }}</h6>
                                    <h6 class="border p-2 text-success">
                                        Order status Message: <span class="text-uppercase">{{ $order->status_message }}</span>
                                    </h6>
                                </div>
                                <div class="col-md-6">
                                    <h5>User Detailes</h5>
                                    <hr>
                                    <h6>Full Name: {{ $order->fullname }}</h6>
                                    <h6>Email: {{ $order->email }}</h6>
                                    <h6>Phone: {{ $order->phone }}</h6>
                                    <h6>Address: {{ $order->address }}</h6>
                                    <h6>Pin Code: {{ $order->pincode }}</h6>
                                </div>
                            </div>
    
                            <br>
                            <h5>Order Items</h5>
                            <hr>
    
                            <div class="table-responsive">
    
                                <table class="table table-bordered table-striped">
    
                                    <thead>
                                        <tr>
                                            <th>Item id</th>
                                            <th>Image</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Totaol</th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        @php
                                            $totalprice = 0;
                                        @endphp
                                        @foreach ($order->orderItems as $item)
                                        
                                            <tr>
                                                <td width="10%">{{ $item->id }}</td>
                                                <td width="10%">
                                                    @if ($item->product->image)
                                                        <label class="product-name">
                                                            <img src="{{ asset('uploads/product/'. $item->product->image) }}" style="width: 50px; height: 50px" alt="">
                                                        </label>
                                                    @else
                                                        <img src="" style="width: 100px; height: 100px" alt="">
                                                    @endif
                                                </td>
                                                <td width="10%">{{ $item->product->name }}</td>
                                                <td width="10%">${{ $item->price }}</td>
                                                <td width="10%">${{ $item->quantity }}</td>
                                                <td width="10%">${{ $item->quantity * $item->price }}</td>
                                            </tr>
                                            @php
                                                $totalprice += $item->quantity * $item->price;
                                            @endphp
                                        @endforeach
                                        <tr>
                                            <td colspan="5" class="fw-bold">Total amout</td>
                                            <td colspan="1" class="fw-bold">${{ $totalprice }}</td>
                                        </tr>
                                    </tbody>
    
                                </table>
    
    
                            </div>
    
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </main>

@endsection