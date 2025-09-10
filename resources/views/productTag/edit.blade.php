<form action="{{route('productTag.update',$productTag->id)}}"  method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="product_id">Product Id</label>
        <input type="text" name="product_id" id="product_id" value="{{$productTag->product_id}}">
    </div>
    <div>
        <label for="tag_id">Tag Id </label>
        <input type="text" name="tag_id" id="tag_id" value="{{$productTag->tag_id}}">
    </div>


    <div>
        <button type="submit">Update</button>
    </div>
</form>
