
<style>
/* Body background */
body {
    background: #cbbcf0; /* light blue */
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

/* Form container with gradient */
form {
    max-width: 500px;
    margin: 50px auto;
    padding: 30px;
    background: linear-gradient(135deg, #4d3795, #cfa1ea); /* blue to sea green */
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* Form labels */
form label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    background: linear-gradient(90deg, #d4dfe7, #181e64); /* purple → deep blue */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 16px;
}

/* Input fields */
form input[type="text"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 18px;
    border: 2px solid #7e57c2;
    border-radius: 10px;
    font-size: 16px;
    color: #1a237e;
    background: #a892ea; /* light blue inside input */
    transition: all 0.3s ease;
}

/* Input focus effect */
form input[type="text"]:focus {
    border-color: #651fff;
    box-shadow: 0 0 8px rgba(103,58,183,0.5);
    outline: none;
}

/* Submit button */
form button {
    width: 100%;
    padding: 14px;
    background: linear-gradient(90deg, #7e57c2, #1a237e);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

/* Button hover */
form button:hover {
    background: linear-gradient(90deg, #1a237e, #7e57c2);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 600px) {
    form {
        padding: 20px;
    }
}
</style>










<form action="{{route('product.update',$product->id)}}"  method="post" enctype="multipart/form-data">
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
        <input type="file" name="image" id="image" value="{{$product->image}}">
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
