@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<script type="text/javascript">
  function prevIMG(input){
    if (input.files && input.files[0])
    {
      var urrl = window.URL || window.webkitURL;
      var imagen = new Image();
      imagen.onload = function() {
        var lector = new FileReader();
        lector.onload = function (e){
          var prev = document.getElementById("previsualizar");
          prev.src = e.target.result;
        };

        lector.readAsDataURL(input.files[0]);
      }
      imagen.onerror = function() {
        console.log("ERROR_IMAGEN");
      }

      imagen.src = urrl.createObjectURL(input.files[0]);
    }
  }
</script>

<div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <div class="col-12 col-md-8">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre del platillo</label>
              <input type="text" value="{{$platillo->nombre}}" class="form-control" id="exampleFormControlInput1" placeholder="Aqui va el nombre">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Categoría</label>
              <select class="form-control" id="exampleFormControlSelect1">
            
               <option value="Platillo fuerte" {{ $platillo->categoria == 'Platillo fuerte' ? 'Selected' : '' }}>Platillo fuerte</option>
               <option value="Bebida" {{ $platillo->categoria =='Bebida' ? 'Selected' : '' }}>Bebida</option>
               <option value="Postre" {{ $platillo->categoria =='Postre' ? 'Selected' : '' }}>Postre</option>
              
            </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Precio</label>
              <input class="form-control" value="{{$platillo->precio}}" id="exampleFormControlSelect2">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción</label>
              <!--placeholder -->
              <textarea class="form-control"  id="exampleFormControlTextarea1" rows="3">{{$platillo->descripcion}}</textarea>
            </div>
            <a type="button" class="btn btn-primary"  href="{{route('home')}}" >Atrás</a>
            <button type="button" class="btn btn-success">Guardar</button>
          </form>
      </div>
      <div class="col-6 col-md-4">
        <form class="md-form">
            <div class="file-field">
              <div class="mb-4 text-center">
                <img id="previsualizar" src="/storage/platillos/{{$platillo->imagen}}"
                
                  class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" width="150px" height="150px">
              </div>
              <div class="d-flex justify-content-center">
                <div class="btn btn-mdb-color btn-rounded float-left">
                  <span>Foto actual</span>
                  <input type="file" accept="image/*" onchange="prevIMG(this)">
                </div>
              </div>
            </div>
          </form>
    </div>
    </div>





@endsection