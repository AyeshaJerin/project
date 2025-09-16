@extends('layouts.back')
@section('page_title',"Category Add")
@section('content')



<form action="{{route('category.store')}}"  method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="description">Description </label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="created_by">Created_by</label>
        <input type="text" name="created_by" id="created_by">
    </div>

    <div>
        <button type="submit">Save</button>
    </div>
</form>
@endsection
