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
            <div class="col-md-6">
                <label for="email" class="form-label">Correo</label>
                <input name="email" type="text" class="form-control" id="email" value="{{$user->email}}">
            </div>
            <div class="col-md-6">
                <label for="tel" class="form-label">Teléfono</label>
                <input name="tel" type="text" class="form-control" id="tel" value="{{$user->tel}}">
            </div>
            <div class="col-md-6">
                <label for="dir" class="form-label">Dirección</label>
                <input name="dir" type="text" class="form-control" id="dir" value="{{$user->dir}}">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-negro">Actualizar</button>
            </div>
        </form>
    </div>
</section>

@endsection