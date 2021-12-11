@extends('layouts.app')

@section('content')

<x-nav-admin/>
<section class="home-cursos container my-5">
    <div class="admin-users_title">
        <h2 class="text-center">Productos</h2>

    </div>
    <a href="{{route('adminproducto.create')}}" class="d-block mb-5"><span class="tag-category badge rounded-pill bg-dark">Agregar Producto</span></a>
    <section class="container show-curso_lista">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Foto</th>
              <th scope="col">Categoría</th>
              <th scope="col">Precio</th>
              <th scope="col">Stock</th>
            </tr>
          </thead>
          <tbody>
            @foreach($productos as $producto)
            <tr>
              <th scope="row">1</th>
              <td>{{$producto->nombre}}</td>
              <td><img src="{{ asset('/fotos/'.$producto->foto) }}" alt=""></td>
              <td>{{$producto->categoria}}</td>
              <td>${{$producto->precio}}</td>
              <td>{{$producto->stock}}</td>
            </tr>
            @endforeach
          </tbody>

        </table>
    </section>
</section>
@endsection