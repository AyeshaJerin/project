

@extends('layouts.back')
@section('page_title',"Coupon Add")
@section('content')


 <div class="col-lg-6">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Add Coupon</div>

           <hr>

           <form action="{{route('coupon.store')}}"  method="post">
            @csrf
           <div class="form-group">
            <label for="code">Code</label>
            <input type="text"  name="code"  class="form-control form-control-rounded" id="code">
           </div>
           <div class="form-group">
            <label for="discount_type">Discount Type</label>
            <input type="text" name="discount_type"  class="form-control form-control-rounded" id="discount_type" >
           </div>
           <div class="form-group">
            <label for="discount_value">Discount Value</label>
            <input type="text" name="discount_value" class="form-control form-control-rounded" id="discount_value" >
           </div>


           <div class="form-group">
            <label for="usage_limit">Usage Limit</label>
            <input type="text"  name="usage_limit"  class="form-control form-control-rounded" id="usage_limit">
           </div>


           <div class="form-group">
            <label for="used_count">Used Count</label>
            <input type="text"  name="used_count"  class="form-control form-control-rounded" id="used_count">
           </div>


           <div class="form-group">
            <label for="min_order_amount">Min Order Amount</label>
            <input type="text"  name="min_order_amount"  class="form-control form-control-rounded" id="min_order_amount">
           </div>


           <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="text"  name="start_date"  class="form-control form-control-rounded" id="start_date">
           </div>


           <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="text"  name="end_date"  class="form-control form-control-rounded" id="end_date">
           </div>


           <div class="form-group">
            <label for="is_active">Is Active</label>
            <input type="text"  name="is_active"  class="form-control form-control-rounded" id="is_active">
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

