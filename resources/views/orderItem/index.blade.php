@extends('layouts.back')
@section('page_title',"OrderItem Add")
@section('content')



<div class="col-lg-12">
    <div class="card">
    <div class="card-body">

        {{-- <a href="{{route('orderItem.create')}}">Add new</a> --}}
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order Id</th>
                    <th scope="col">Product Id</th>
                    <th scope="col">Quantity </th>
                    <th scope="col">Unit Price </th>
                    <th scope="col">Line Total </th>
                    {{-- <th scope="col">Action </th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse($data as $d)

                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{$d->order_id}}</td>
                        <td>{{$d->product_id}}</td>
                        <td>{{$d->quantity}}</td>
                         <td>{{$d->unit_price}}</td>
                          <td>{{$d->line_total}}</td>

                        {{-- <td>
                            <a href="{{route('orderItem.edit',$d->id)}}">Update</a>

                            <form method="post" action="{{route('orderItem.destroy',$d->id)}}">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td> --}}
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
