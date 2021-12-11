@extends('layouts.app')

@section('content')

@if(session('success'))
    <h2>{{session('success')}}</h2>
@endif
<section class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="display-5 mb-2">{{$user->name}}</h1>
        </div>
        <!-- <div class="col">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin-index.html">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-productos.html">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-socios.html">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reporte</a>
                </li>
            </ul>
        </div> -->
    </div>
</section>
<section class="show-curso_desc container my-5">
    <div class="card w-75 shadow-lg edit-course_card">
        <form class="row g-3" action="{{route('adminuser.update', $user->id)}}" method="POST">
            @method('PATCH')
            @csrf
            <div class="col-md-12">
                <label for="name" class="form-label">Nombre</label>
                <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}">
            </div>
            <div class="col-md-12">
                <label for="ap_paterno" class="form-label">Apellido paterno</label>
                <input name="ap_paterno" type="text" class="form-control" id="ap_paterno" value="{{$user->ap_paterno}}">
            </div>
            <div class="col-md-12">
                <label for="ap_materno" class="form-label">Apellido materno</label>
                <input name="ap_materno" type="text" class="form-control" id="ap_materno" value="{{$user->ap_materno}}">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Correo</label>
                <input name="email" type="text" class="form-control" id="email" value="{{$user->email}}">
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Teléfono</label>
                <input name="tel" type="text" class="form-control" id="tel" value="{{$user->tel}}">
            </div>
            <div class="col-md-6">
                <label for="calle" class="form-label">Calle</label>
                <input name="calle" type="text" class="form-control" id="calle" value="{{$user->calle}}">
            </div>
            <div class="col-md-6">
                <label for="colonia" class="form-label">Colonia</label>
                <input name="colonia" type="text" class="form-control" id="colonia" value="{{$user->colonia}}">
            </div>
            <div class="col-md-6">
                <label for="numero_calle" class="form-label">Número de calle</label>
                <input name="numero_calle" type="text" class="form-control" id="numero_calle" value="{{$user->numero_calle}}">
            </div>
            <div class="col-md-6">
                <label for="codigo_postal" class="form-label">Código postal</label>
                <input name="codigo_postal" type="text" class="form-control" id="codigo_postal" value="{{$user->codigo_postal}}">
            </div>
            <div class="col-md-6">
                <label for="estado" class="form-label">Estado</label>
                <input name="estado" type="text" class="form-control" id="estado" value="{{$user->estado}}">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-negro">Actualizar</button>
            </div>
        </form>
    </div>
</section>
<section class="home-cursos container my-5">
    <div class="admin-users_title">
        <h2 class="text-center">Tickets</h2>
        <form class="d-flex w-75 float-right">
           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
    </div>
    <section class="container show-curso_lista">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">ID</th>
              <th scope="col">Fecha</th>
              <th scope="col">Productos</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Status</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>1586aR</td>
              <td>24/08/2021</td>
              <td>
                <ul>
                    <li>Almendra - 2</li>
                    <li>Cacao - 3</li>
                    <li>India - 1</li>
                </ul>
              </td>
              <td>$1600</td>
              <td>En tránsito</td>
              <td>
                <a href="admin-user-show.html"><span class="tag-category badge rounded-pill bg-dark">Ver</span></a>
                <a href="admin-user-edit.html"><span class="tag-category badge rounded-pill bg-dark">Editar</span></a>
                <a href="curso-edit.html"><span class="tag-category badge rounded-pill bg-dark">Eliminar</span></a>
              </td>
            </tr>
          </tbody>

        </table>
    </section>
</section>

@endsection