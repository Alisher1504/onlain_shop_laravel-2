@extends('layouts.admin')

@section('content')
    <main id="main" class="main">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <h3>Orders</h3>

                        <div class="table-responsive">

                            <table class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>Order id</th>
                                        <th>Trasking no</th>
                                        <th>user Name</th>
                                        <th>Paymrnt Made</th>
                                        <th>Ordered Date</th>
                                        <th>Status message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($order as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->tracking_no }}</td>
                                            <td>{{ $item->fullname }}</td>
                                            <td>{{ $item->payment_mode }}</td>
                                            <td>{{ $item->created_at->format('d-m-y') }}</td>
                                            <td>{{ $item->status_message }}</td>
                                            <td>
                                                <a href="{{ 'orders/'.$item->id }}" class="btn btn-primary">View</a>
                                            </td>
                                        </tr>
                                    @empty  
                                        <tr>
                                            <td colspan="7">NoOrders Aviable</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>

                            <div>
                                {{ $order->links() }}
                            </div>

                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

    </main>

@endsection