<form action="{{route('productTag.store')}}"  method="post">
    @csrf
    <div>
        <label for="product_id">Product Id</label>
        <input type="text" name="product_id" id="product_id">
    </div>
    <div>
        <label for="tag_id">Tag Id </label>
        <input type="text" name="tag_id" id="tag_id">
    </div>


    <div>
        <button type="submit">Save</button>
    </div>
</form>
