@extends('layouts.app')

@section('content')

@if(session('cart-success'))
    <div class="alert bg-warning">
        <p>{{session('cart-success')}}</p>
    </div>
@endif
<section class="landing container pt-mb-5">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1 class="display-5 mb-2">Artículos de primera calidad.</h1>
            <p>Desde este sitió podrás encontrar lo necesario para tus clases y algo más.</p>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block">
            <img src="images/logo2.png" alt="" width="70">
        </div>
    </div>
</section>
<section class="home-cards container my-5">
    <h2 class="text-center pb-5 text-naranja">Artículos de papeleria</h2>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($cats_195 as $cat_195)
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('/fotos/'.$cat_195->foto)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{$cat_195->nombre}}</h4>
                        <p class="card-text">Papeleria</p>
                        <p>Precio: {{$cat_195->precio}}</p>

                    </div>
                    <div class="card-footer d-flex">
                        <div class="card-footer_tags">
                        </div>
                        <div class="card-footer_btn">
                            <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                                <input type="hidden" value="{{$cat_195->id}}" name="product_id">
                                <button type="submit" class="bg-transparent border-0">
                                    <img class="ml-auto" src="img/add-cart.png" alt="">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <h2 class="text-center pb-5 text-naranja">Regalos</h2>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($cats_360 as $cat_360)
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('/fotos/'.$cat_360->foto)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">{{$cat_360->nombre}}</h4>
                        <p class="card-text">Regalos</p>
                        <p>Precio: {{$cat_360->precio}}</p>

                    </div>
                    <div class="card-footer d-flex">
                        <div class="card-footer_tags">
                        </div>
                        <div class="card-footer_btn">
                            <form action="{{route('cart.store')}}" method="POST">
                            @csrf
                                <input type="hidden" value="{{$cat_360->id}}" name="product_id">
                                <button type="submit" class="bg-transparent border-0">
                                    <img class="ml-auto" src="img/add-cart.png" alt="">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
