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

                        <form action="" method="GET">

                            <div class="row my-3">
                                <div class="col-md-3">
                                    <label>Filter by Date</label>
                                    <input type="date" name="date" value="{{ date('Y-m-d') }}" class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label>Filter by Status</label>
                                    <select name="status" class="form-select">
                                        <option value="">Select Status</option>
                                        <option value="in progress">In progress</option>
                                        <option value="completed">Completed</option>
                                        <option value="pending">Pending</option>
                                        <option value="cancelled">Cancelled</option>
                                        <option value="out-for-delivery">Out for delivery</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>

                        </form>

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