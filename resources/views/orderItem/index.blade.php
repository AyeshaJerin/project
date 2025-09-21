@extends('layouts.back')
@section('page_title',"Order Item")
@section('content')



<div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Basic Table</h5> --}}
        <a href="{{route('orderItem.create')}}">Add new</a>
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order ID</th>
                    <th>Product ID</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Line Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $d)

                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $d->order_id}}</td>
                        <td>{{ $d->product_id }}</td>
                        <td>{{ $d->quantity }}</td>
                        <td>{{ $d->unit_price }}</td>
                        <td>{{ $d->line_total }}</td>


                        <td>
                            <a href="{{route('orderItem.edit',$d->id)}}">Update</a>

                            <form method="post" action="{{route('orderItem.destroy',$d->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>
                            No data found
                        </td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>

@endsection
