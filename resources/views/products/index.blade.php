

@extends('layouts.app')
@section('content')
<div class="ml-5">
    <a href="{{ route('products.create') }}" class="btn btn-info ">Add New Items</a>
</div>
<br/>
<div >
<table class="table">
<thead>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Category Id</th>
    <th>Action</th>
</thead>
<tbody>
    @foreach ($products as $items)
        

    <tr>

        <td>{{ $items->id }}</td>
        <td>{{ $items->product_name }}</td>
        <td>{{ $items->product_price }}</td>
        <td>{{ $items->desc }}</td>
        <td>{{ $items->cat_id }}</td>
        <td><a class="btn btn-primary" href="{{ route('products.edit',$items->id)}}">Edit</a>
      
        <form action="{{ route('products.destroy',$items->id) }}" method="POST" style="display :inline">
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-danger" onclick="return confirm('You want to delete this item...')" value="Delete">

        </form>
    </tr>
    @endforeach
</tbody>
</table>
</div>

@endsection