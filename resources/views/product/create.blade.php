<form action="{{route('product.store')}}"  method="post">
    @csrf
    <div>
        <label for="category_id">Category Id</label>
        <input type="text" name="category_id" id="category_id">
    </div>

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="price">Price </label>
        <input type="text" name="price" id="price">
    </div>
    <div>
        <label for="discount_price">Discount Price</label>
        <input type="text" name="discount_price" id="discount_price">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="text" name="image" id="image">
    </div>
    <div>
        <label for="is_featured">Is Featured</label>
        <input type="text" name="is_featured" id="is_featured">
    </div>
    <div>
        <label for="is_active">Is Active</label>
        <input type="text" name="is_active" id="is_active">
    </div>

    <div>
        <button type="submit">Save</button>
    </div>
</form>
