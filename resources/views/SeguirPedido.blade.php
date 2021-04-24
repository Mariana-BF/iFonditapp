@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class='container'>


    <br>
    <br>
    <br>
    <h1> El estatus de tu orden es: </h1> <h2> AQUI VA EL ESTATU DESDE LA BD </h2>

    <div class="text-center">
        <img src="storage\app\public\platillos\ESTATUS.png" class="img-fluid" alt="...">
      </div>
    <br>
    <br>

    <div class="text-center">

    <orden-recibida></orden-recibida>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


</div>




@endsection