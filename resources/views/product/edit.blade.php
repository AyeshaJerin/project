<form action="{{route('product.update',$product->id)}}"  method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="category_id">Category Id</label>
        <input type="text" name="category_id" id="category_id" value="{{$product->category_id}}">
    </div>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">
    </div>
    <div>
        <label for="price">Price </label>
        <input type="text" name="price" id="price" value="{{$product->price}}">
    </div>
    <div>
        <label for="discount_price">Discount Price</label>
        <input type="text" name="discount_price" id="discount_price" value="{{$product->discount_price}}">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{$product->description}}">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{$product->image}}">
    </div>
    <div>
        <label for="is_featured">Is Featured</label>
        <input type="text" name="is_featured" id="is_featured" value="{{$product->is_featured}}">
    </div>
    <div>
        <label for="is_active">Is Active</label>
        <input type="text" name="is_active" id="is_active" value="{{$product->is_active}}">
    </div>

    <div>
        <button type="submit">Update</button>
    </div>
</form>
