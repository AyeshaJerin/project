<a href="{{route('product.create')}}">Add new</a>


<table border="1">

    <tr>
        <th>Category_id </th>
        <th>Name</th>
        <th>Price </th>
        <th>discount_price </th>
        <th>description</th>
        <th>image</th>
        <th>is_featured</th>
         <th>is_active</th>

        <th>Action</th>
    </tr>
    @forelse($data as $d)
        <tr>
            <td>{{$d->category_id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->price}}</td>
            <td>{{$d->discount_price}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->image}}</td>
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


</table>
