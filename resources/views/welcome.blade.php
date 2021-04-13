@extends('layouts.app')

@section('content')
    <div class="fondo">
        <div class="contenido-header">
            <p></p>
            <p>Algun eslogan (falta cambiar fonts y color)</p>
        </div>
    </div>
    <div class="conteiner" ></div>
    <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/storage//imagenes/pozole.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/storage//imagenes/tacos.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/storage//imagenes/enchiladas.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

@endsection