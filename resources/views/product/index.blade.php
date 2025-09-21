@extends('layouts.back')
@section('page_title',"Product Add")
@section('content')


<div class="col-lg-12">
    <div class="card">
    <div class="card-body">
        {{-- <h5 class="card-title">Basic Table</h5> --}}
        <a href="{{route('product.create')}}">Add new</a>
        <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category_id</th>
                <th scope="col">Name</th>
                <th scope="col">Price </th>
                <th scope="col">discount_price  </th>
                <th scope="col">description </th>
                <th scope="col">image</th>
                <th scope="col">is_featured </th>
                <th scope="col">is_active </th>
                <th scope="col">Action </th>
            </tr>
            </thead>
            <tbody>
            @forelse($data as $d)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{$d->category_id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->price}}</td>
                    <td>{{$d->discount_price}}</td>
                    <td>{{$d->description}}</td>
                    <td><img width="80px" src="{{asset('uploads/'.$d->image)}}" alt=""></td>
                    <td>{{$d->is_featured}}</td>
                    <td>{{$d->is_active}}</td>
                    <td>
                       <a href="{{route('product.edit',$d->id)}}">Update</a>

                        <form method="post" action="{{route('product.destroy',$d->id)}}">
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
