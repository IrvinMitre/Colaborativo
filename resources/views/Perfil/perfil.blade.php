@extends('layouts.app')

@section('content')
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">  Bienvenido a tus proyectos {{ Auth::user()->name }} </div>
                                <tbody>
                                   <table>
  <tr>
    <th>Numero de proyecto</th>
    <th>Nombre de proyecto</th>
    <th>Administrador</th>
    <th>Colaboradores</th>
  </tr>
  <tr>
    <td><a href="{{ url('/proyecto') }}">1</a></td>
    <td><a href="{{ url('/proyecto') }}">Proyec1</a></td>
    <td>Irvin</td>
    <td>Irin</td>
  </tr>
 <tr>
    <td>2</td>
    <td>Proyec2</td>
    <td>Irvin</td>
    <td>Irin</td>
  </tr>

</table>
                                </tbody>
                    ¿Deseas crear un proyecto?
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
