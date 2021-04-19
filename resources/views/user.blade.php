@extends('layouts.app')

@section('content')
<h1 class="text-center mb-5">Menú</h1>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-3">
            <div class="sticky-top-2">
                <div class="card">
                    <h3 class="text-center mt-2">Categorias</h3>
                    <a href="{{ route('platillos.comida') }}" id="plato" class="text-center my-1"><i class="fas fa-utensils">Platillo fuerte</i></a>
                    <a href="{{ route('platillos.bebida') }}" class="text-center my-1"><i class="fas fa-glass-martini-alt">Bebidas</i></a>
                    <a href="{{ route('platillos.postre') }}" class="text-center my-1"><i class="fas fa-candy-cane">Postres</i></a>
                    
                </div>
            </div>
            <div class="sticky-top-3 mt-5">
                <div class="card " id="ordenes">
                    <h3 class="text-center mt-2">Ordenes</h3>
                    <p class="text-center">kldfjglkdfgjlfkgdj</p>
                    <p class="text-center">dlkfsdfjlk</p>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="portfolio">
                {{-- Recorrer todos los registros --}}
                @foreach ($platillos as $platillo)
                    <div class="portfolio__item">
                        <img src="/storage/platillos/{{$platillo->imagen}}" alt="" width="100%">
                        <div class="portfolio__desc text-center">
                            <h3 class="portfolio__title">{{$platillo->nombre}}</h3>
                            <a href="#{{$platillo->id}}" class="button">ordenar</a>
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
                        <img src="/storage/imagenes/pozole.jpeg" alt="">
                            
                        <div class="card text-center bg-dark">
                              <div class="card-body">
                                <h3 class="portfolio-lightbox__title mt-2">{{$platillo->nombre}}</h3>
                                <p class="portfolio-lightbox__body">{{$platillo->descripcion}}</p>
                                <a href="" class="btn btn-primary mr-2">Ordenar</a>
                                <input type="number"/>
                          </div>
                        </div>
                           
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

<script>

    
    var ordenes = document.querySelector("#ordenes");
    
    $('plato').on('click',function()
    {
        ordenes.appendChild('kakak');
    })
    
    
    
    
</script>
@endsection



