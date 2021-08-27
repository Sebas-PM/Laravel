@extends('layout')
    @section('title', 'Lista Categorias')
    @section('word', 'Listado categorias')
    @section('content')
    <a href="{{ route('category.form')}}" class="btn btn-primary">Nueva Categoria</a>
    <a href="{{ route('welcome.hi')}}" class="btn btn-secondary">Volver</a>
    @if(Session::has('message'))
    <p class="text-danger">{{ Session::get('message') }}</p>
@endif

@if(Session::has('succesMessage'))
    <p class="text-success">{{ Session::get('succesMessage') }}</p>
@endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Description</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $brandlist)
                <tr>
                    <td>{{$brandlist->name}}</td>
                    <td>{{$brandlist->description}}</td>
                    <td>
                        <a href="{{ route('category.form', ['id'=>$brandlist->id])}}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('productCategory.delete', ['id'=>$brandlist->id])}}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection

    @push('name')

    @endpush

    @prepend('name')

    @endprepend
