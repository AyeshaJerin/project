

@extends('layouts.back')
@section('page_title',"Order Add")
@section('content')


 <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Order</div>

           <hr>

           <form action="{{route('order.store')}}"  method="post">
            @csrf
           <div class="form-group">
            <label for="user_id">User Id</label>
            <input type="text"  name="user_id"  class="form-control form-control-rounded" id="user_id">
           </div>
           <div class="form-group">
            <label for="coupon_id">Coupon Id</label>
            <input type="text" name="coupon_id"  class="form-control form-control-rounded" id="coupon_id" >
           </div>
           <div class="form-group">
            <label for="total_price">Total Price</label>
            <input type="text" name="total_price" class="form-control form-control-rounded" id="total_price" >
           </div>

           <div class="form-group">
            <label for="discount_amount">Discount Amount</label>
            <input type="text" name="discount_amount" class="form-control form-control-rounded" id="discount_amount" >
           </div>

           <div class="form-group">
            <label for="final_price">Final Price</label>
            <input type="text" name="final_price" class="form-control form-control-rounded" id="final_price" >
           </div>

           <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control form-control-rounded" id="status" >
           </div>

           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"> Save</button>
          </div>
          </form>
         </div>
         </div>
      </div>

{{-- <div class="update-form">
    <h2>Add Category</h2>
    <form action="{{route('category.store')}}"  method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter category name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="created_by">Created By</label>
            <input type="text" name="created_by" id="created_by" placeholder="Enter creator name">
        </div>
        <button type="submit">Save</button>
    </form>
</div> --}}

@endsection

