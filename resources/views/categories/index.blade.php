@extends('layouts.app')
@section('content')
<div class="ml-5">
    <a href="{{ route('categories.create') }}" class="btn btn-info ">Add New Items</a>
</div>
<br/>
<div >
<table class="table">
<thead>
    <th>Id</th>
    <th>Category Name</th>
 
    <th>Action</th>
</thead>
<tbody>
    @foreach ($categories as $items)
        

    <tr>

        <td>{{ $items->id }}</td>
        <td>{{ $items->name }}</td>
       
        <td><a class="btn btn-primary" href="{{ route('categories.edit',$items->id)}}">Edit</a>
      
        <form action="{{ route('categories.destroy',$items->id) }}" method="POST" style="display :inline">
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