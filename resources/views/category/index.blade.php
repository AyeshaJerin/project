<a href="{{route('category.create')}}">Add new</a>


<table border="1">

    <tr>
        <th>Name</th>
        <th>Description </th>

        <th>Created_by</th>
        <th>Action</th>
    </tr>
    @forelse($data as $d)
        <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->description}}</td>
            <td>{{$d->created_by}}</td>

            <td>
                <a href="{{route('category.edit',$d->id)}}">Update</a>

                <form method="post" action="{{route('category.destroy',$d->id)}}">
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
