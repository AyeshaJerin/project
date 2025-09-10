<a href="{{route('tag.create')}}">Add new</a>


<table border="1">

    <tr>
        <th>Name</th>

        <th>Action</th>
    </tr>
    @forelse($data as $d)
        <tr>
            <td>{{$d->name}}</td>


            <td>
                <a href="{{route('tag.edit',$d->id)}}">Update</a>

                <form method="post" action="{{route('tag.destroy',$d->id)}}">
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
