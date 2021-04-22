@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">Menú</h1>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-3">
            <div class="sticky-top-2">
                <div class="card">
                    <h3 class="text-center mt-2">Categorias</h3>
                    <button  id="platofuerte" class="text-center mb-2 mx-4 btn-success"><i class="fas fa-utensils mx-2 fa-lg"></i> Platillo fuerte</button>
                    <button id="bebidas"  class="text-center mb-2 btn-success mx-4"><i class="fas fa-glass-martini-alt mx-2 fa-lg"></i>Bebidas</button>
                    <button id="postres"  class="text-center  mb-2 btn-success mx-4"><i class="fas fa-candy-cane mx-2 fa-lg"></i>Postres</button>
                    
                </div>
            </div>
            <div class="sticky-top-3 mt-5">
                <div class="card " id="ordenes">
                    <h3 class="text-center mt-2">Orden</h3>
                    <div id="contenido2" class="text-center">
                        
                    </div>
                    <hr class="my-1">
                    <button type="button" class="btn btn-primary mx-3 my-3">Ordenar</button>
                    
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="portfolio" id="contenido">
                {{-- Recorrer todos los registros --}}
                @foreach ($platillos as $platillo)
                    <div class="portfolio__item" >
                        <img src="/storage/{{$platillo->imagen}}" alt="" width="100%">
                        <div class="portfolio__desc text-center">
                            <h3 class="portfolio__title">{{$platillo->nombre}}</h3>
                            <a href="#{{$platillo->id}}"  class="button">ordenar</a>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- the portafolio lightboxes -->
            <div class="portfolio-lightboxes">
                @foreach ($platillos as $platillo)
                <div id="{{$platillo->id}}" class="portfolio-lightbox">
                    <div class="portfolio-lightbox__content">
                        <a href="#" class="close"></a>
                        <img src="/storage/{{$platillo->imagen}}" alt="">
                            
                        <div class="card text-center bg-dark">
                           <div class="card-body">
                                <h3 class="portfolio-lightbox__title  mt-2">{{$platillo->nombre}}</h3>
                                <p class="portfolio-lightbox__body">{{$platillo->descripcion}}</p>
                                <p>Precio</p>
                                <p>{{$platillo->precio}}</p>
                                <form class="btn btn-primary mr-2" id="ordenar"  method="POST"  action="{{route('InsertarOrden',['id_platillo' => $platillo->id ] )}}">
                                    @csrf
                                    @method('PUT')  
                                    <input  type="hidden" name="id" value="{{$platillo->id}}">
                                    <button type="submit">Ordenar</button>
                                </form>
                                <input type="number" min="1" max="100" />
                          </div>
                        </div>
                           
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
    <form action="GET" action="/orden/ordenes" id="form1">
        @csrf
        <input type="hidden" name="id" value="1">
    </form>
@endsection

@section('javascript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/actualizar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/insertarEnOrden.js') }}"></script>
@endsection



