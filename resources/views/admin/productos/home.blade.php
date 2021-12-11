@extends('layouts.app')

@section('content')

<x-nav-admin/>
<section class="home-cursos container my-5">
    <div class="admin-users_title">
        <h2 class="text-center">Productos</h2>
        <form class="d-flex w-75 float-right">
           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
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
              <th scope="col">Acciones</th>
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
              <td>
                <a href="admin-producto-edit.html"><span class="tag-category badge rounded-pill bg-dark">Editar</span></a>
                <a href="curso-edit.html"><span class="tag-category badge rounded-pill bg-dark">Eliminar</span></a>
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
    </section>
</section>
@endsection