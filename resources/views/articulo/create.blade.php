@extends('adminlte::page')

@section('title', 'Crud con laravel')

@section('content_header')
    <h1>Crear Articulo</h1>
@stop

@section('content')
<form action="/articulos"method="POST">
    @csrf
<div class="mb-3">
  <label for="" class="form-label">Codigo</label>
  <input id="codigo" name="codigo" type="text" class="form-control" tabiindex="1">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input id="descripcion" name="descripcion" type="text" class="form-control" tabiindex="2">
</div>
<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input id="cantidad" name="cantidad" type="number" class="form-control" tabiindex="3">
</div>
<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabiindex="4">
</div>
<a  href="/articulos" class="btn btn-secundary" tabiindex="5">Cancelar</a>
<button type="submit"class="btn btn-primary"tabiindex="4" >Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
