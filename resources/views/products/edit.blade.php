@extends('layouts.app')

@section('content')

<h2>Edit Product</h2>
<form action="{{ route('products.update',$product->id) }}" method="POST">
 @method('PUT')
    @csrf
    Name:<br />
    <input type="text" name="name" value="{{ $product->product_name }}" class="form-control">
<br/>

Price:<br />
<input type="text" name="price" value="{{ $product->product_price }}" class="form-control">
<br/>

Description:<br />
<input type="text" name="desc" value="{{ $product->desc}}" class="form-control">
<br/>

Catogery:<br />
<select name="cat" id="" class="form-control">
    @foreach ($categories as $cat)
    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        
    @endforeach
</select>
<br/>
    <input type="submit" class="btn btn-primary" value="Update">
</form>
@endsection