


@extends('layouts.back')
@section('page_title',"ProductTag Add")
@section('content')


 <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Product Tag</div>

           <hr>

           <form action="{{route('productTag.store')}}"  method="post">
            @csrf
           <div>
                <label for="product_id">Product Id</label>
                <input type="text" name="product_id" id="product_id"  class="form-control form-control-rounded">
           </div>
            <div>
                <label for="tag_id">Tag Id </label>
                <input type="text" name="tag_id" id="tag_id"  class="form-control form-control-rounded">
            </div>

          <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"> Save</button>
          </div>
          </form>
         </div>
        </div>
    </div>



@endsection











{{-- <form action="{{route('productTag.store')}}"  method="post">
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
</form> --}}
