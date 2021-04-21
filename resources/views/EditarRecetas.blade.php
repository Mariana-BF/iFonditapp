@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <div class="col-12 col-md-8">
        <form method="POST" action="{{route('platillos.update',['platillo' => $platillo->id ] ) }}" enctype="multipart/form-data" novalidate >
          @csrf
          @method('PUT')
            <div  class="form-group">
              <label for="exampleFormControlInput1">Nombre del platillo</label>
              <input id="nombre"  type="text" value="{{$platillo->nombre}}" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Aqui va el nombre">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Categoría</label>
              <select class="form-control" name="categoria" id="exampleFormControlSelect1">
            
               <option value="Platillo fuerte" {{ $platillo->categoria == 'Platillo fuerte' ? 'Selected' : '' }}>Platillo fuerte</option>
               <option value="Bebida" {{ $platillo->categoria =='Bebida' ? 'Selected' : '' }}>Bebida</option>
               <option value="Postre" {{ $platillo->categoria =='Postre' ? 'Selected' : '' }}>Postre</option>
              
            </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Precio</label>
              <input class="form-control" name="precio" value="{{$platillo->precio}}" id="exampleFormControlSelect2">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción</label>
              <textarea class="form-control" value="{{$platillo->descripcion}}" name="descripcion" id="exampleFormControlTextarea1" rows="3">{{$platillo->descripcion}}</textarea>
              <input type="file" name="imagen" accept="image/*" onchange="prevIMG(this)">
            </div>
            <a type="button"  class="btn btn-primary"  href="{{route('home')}}" >Atrás</a>
            <actualizar-platillo
            platillo-id={{$platillo->id}}
          ></actualizar-platillo>
          </form>
      </div>
      <div class="col-6 col-md-4">
        <form class="md-form">
            <div class="file-field">
              <div class="mb-4 text-center">
                <img id="previsualizar" src="/storage/{{$platillo->imagen}}"
                
                  class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" width="150px" height="150px">
              </div>
              <div class="d-flex justify-content-center">
                <div class="btn btn-mdb-color btn-rounded float-left">
                  <span>Foto actual</span>
                 
                </div>
              </div>
            </div>
          </form>
    </div>
    </div>
@endsection