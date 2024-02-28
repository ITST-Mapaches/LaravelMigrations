@extends('layouts.app')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">razon social</th>
            <th scope="col">nombre completo</th>
            <th scope="col">direccion</th>
            <th scope="col">telefono</th>
            <th scope="col">correo</th>
            <th scope="col">RFC</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- recorre el arreglo de proveedores, y a cada indice lo llamamos proveedor -->
        @foreach($proveedores as $proveedor)
        <tr>
            <!-- enviamos el campo correspondiente en una columna de cada registro-->
            <th scope="row">{{ $proveedor->idProveedor }}</th>
            <td>{{ $proveedor->razonSocial }}</td>
            <td>{{ $proveedor->nombreCompleto }}</td>
            <td>{{ $proveedor->direccion }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->correo }}</td>
            <td>{{ $proveedor->rfc }}</td>
            <td>
                <button type="button" class="btn btn-primary">Actualizar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="card-footer">
    @if($proveedores->total() > 10)
    {{$proveedores->links()}}
    @endif
</div>