@extends('layouts.app')

@section('content')
   
<div class="conteiner" ></div>
<div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/storage//imagenes/pozole.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage//imagenes/tacos.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/storage//imagenes/enchiladas.jpeg" class="d-block w-100" alt="...">
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



<div class="container">
  <div class="row">
    <div class="col-4">
      <div class="card-body">
        <h5 class="card-title">Laura</h5>
        <p class="card-text">"Excelente servicio , estoy muy satisfecha con los tiempos y la comida!" <i class="far fa-grin-beam"></i></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="col-4">
      <div class="card-body">
        <h5 class="card-title">Fernando</h5>
        <p class="card-text">"La comida estuvo deliciosa a pesar de que tardaron un poco sin duda volvería a pedir! ". <i class="far fa-surprise"></i></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="col-4">
      <div class="card-body">
        <h5 class="card-title">Tomas</h5>
        <p class="card-text">"Sin duda mi restaruante favorito en la comodidad de mi casa!". <i class="far fa-grin-stars"></i></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


    
@endsection