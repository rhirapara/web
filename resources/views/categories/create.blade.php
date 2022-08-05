@extends('layouts.app')
@section('content')
<h2>Add New Items</h2>
<form action="{{ route('categories.store') }}" method="POST">

    @csrf
    Name:<br />
    <input type="text" name="name" value="" class="form-control">
<br/>


    <input type="submit" class="btn btn-primary" value="Add">
</form>

@endsection