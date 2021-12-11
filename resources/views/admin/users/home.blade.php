@extends('layouts.app')

@section('content')

@if(session('success'))
    <h2>{{session('success')}}</h2>
@endif

<x-nav-admin/>

<section class="home-cursos container my-5">
    <div class="admin-users_title">
        <h2 class="text-center">Usuarios</h2>
        
    </div>
    <section class="container show-curso_lista">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Correo</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Dirección</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->tel}}</td>
              <td>{{$user->dir}}</td>
              <td>
                <a href="{{route('adminuser.show',$user->id)}}"><span class="tag-category badge rounded-pill bg-dark">Ver</span></a>
                <!-- <a href="admin-user-edit.html"><span class="tag-category badge rounded-pill bg-dark">Editar</span></a> -->

                <form action="{{route('adminuser.destroy', $user->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit"><span class="tag-category badge rounded-pill bg-dark">Eliminar</span></button>
                </form>
                

              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
    </section>
</section>
@endsection
