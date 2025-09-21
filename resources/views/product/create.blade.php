
{{-- <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #6a11cb, #2575fc); /* Background gradient */
        margin: 0;
        padding: 40px;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        width: 100%;
        max-width: 500px;
        background: linear-gradient(135deg, #7f53ac, #647dee); /* Gradient on the form */
        padding: 30px 25px;
        border-radius: 15px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        color: white;
    }

    form div {
        margin-bottom: 16px;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: 600;
        color: #f0f0f0;
    }

    input[type="text"],
    input[type="file"],
    select {
        width: 100%;
        padding: 10px 12px;
        border: none;
        border-radius: 6px;
        font-size: 15px;
        box-sizing: border-box;
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        outline: none;
        transition: background 0.3s, border 0.3s;
    }

    input::placeholder {
        color: #ddd;
    }

    input:focus,
    select:focus {
        background-color: rgba(255, 255, 255, 0.2);
        border: 1px solid #fff;
    }

    button[type="submit"] {
        width: 100%;
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: white;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    button[type="submit"]:hover {
        background: linear-gradient(to right, #5f0fa3, #1c5be7);
        transform: scale(1.02);
    }
</style> --}}





{{-- <form action="{{route('product.store')}}"  method="post" enctype="multipart/form-data">
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
        <input type="file" name="image" id="image" accept="image/*">
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
</form> --}}




@extends('layouts.back')
@section('page_title',"Product Add")
@section('content')



<div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Product</div>

           <hr>

           <form action="{{route('product.store')}}"  method="post" enctype="multipart/form-data">
            @csrf

           <div class="form-group">
            <label for="category_id">Category Id</label>
            <input type="text" name="category_id" id="category_id"      class="form-control form-control-rounded">
           </div>


           <div class="form-group">
            <label for="name">Name</label>
                 <input type="text" name="name" id="name" class="form-control form-control-rounded">
           </div>


           <div class="form-group">
             <label for="price">Price </label>
             <input type="text" name="price" id="price" class="form-control form-control-rounded">
           </div>


           <div class="form-group">
             <label for="discount_price">Discount Price</label>
        <input type="text" name="discount_price" id="discount_price" class="form-control form-control-rounded">
           </div>




           <div class="form-group">
            <label for="description">Description</label>
        <input type="text" name="description" id="description"class="form-control form-control-rounded">
           </div>

           <div class="form-group">
             <label for="image">Image</label>
        <input type="file" name="image" id="image" accept="image/*" class="form-control form-control-rounded">
           </div>


            <div class="form-group">
            <label for="is_featured">Is Featured</label>
            <select name="is_featured" id="is_featured" class="form-control form-control-rounded">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
           </div>

            <div class="form-group">
            <label for="is_active">Is Active</label>
        <input type="text" name="is_active" id="is_active" class="form-control form-control-rounded">
           </div>




           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"> Save</button>
          </div>
          </form>
         </div>
         </div>
      </div>







@endsection
