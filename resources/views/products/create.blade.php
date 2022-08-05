@extends('layouts.app')
@section('content')
<h2>Add New Product</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
   
    @csrf
    Name:<br />
    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
   
<br/>

Price:<br />
<input type="text" name="price" value="{{ old('price') }}" class="form-control">
<br/>

Description:<br />
<input type="text" name="desc" value="{{ old('desc') }}" class="form-control">
<br/>

Catogery:<br />
<select name="cat" id="" class="form-control">
    <option value="" disabled selected>---Select Catogery---</option>
    @foreach ($categories as $cat)
   
    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        
    @endforeach
</select>

<br/>
Photo:<br/>
<input type="file" name="photo" value="" class="form-control">
<br/>
    <input type="submit" class="btn btn-primary" value="Add">
</form>

@endsection