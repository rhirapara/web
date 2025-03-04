@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="col-lg-8">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="{{ url('images/2.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{ url('images/1.jpeg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="row">

    @foreach ($products as $product)
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="{{ asset('storage/'.$product->photo) }}" alt="" width="10px" height="250px"></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="">{{ $product->product_name }}</a>
                </h4>
                <h5>₹ {{ $product->product_price }}</h5>
               <p class="card-text">{{ $product->desc }}</p>
                <hr />
               
                {{-- Category: {{ $products->category->name }} --}}
    
              
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;&#128512;</small>
            </div>

              
        </div>
    </div>
    @endforeach
   
</div>
@endsection