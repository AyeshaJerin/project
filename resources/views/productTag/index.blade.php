<a href="{{route('productTag.create')}}">Add new</a>


<table border="1">

    <tr>
        <th>Product Id</th>
        <th>Tag Id </th>


        <th>Action</th>
    </tr>
    @forelse($data as $d)
        <tr>
            <td>{{$d->product_id}}</td>
            <td>{{$d->tag_id}}</td>

            <td>
                <a href="{{route('productTag.edit',$d->id)}}">Update</a>

                <form method="post" action="{{route('productTag.destroy',$d->id)}}">
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
