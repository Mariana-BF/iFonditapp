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
        <form method="POST" action="{{route('platillos.guardar')}}" enctype="multipart/form-data" novalidate >
            @csrf <!--token para evitar los ataques -->
            
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre del platillo</label>
              <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Aqui va el nombre">
              @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Categoría</label>
              <select class="form-control" name="categoria" id="exampleFormControlSelect1">
               <option value="Platillo fuerte" >Platillo fuerte</option>
               <option value="Bebida">Bebida</option>
               <option value="Postre">Postre</option>
              
            </select>
        @error('categoria')
            <span class="invalid-feedback d-block" role="alert">
                <strong>{{$message}}</strong>
            </span>
        @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Precio</label>
              <input class="form-control" name="precio" id="exampleFormControlSelect2">
              @error('precio')
              <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción</label>
              <!--placeholder -->
              <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
              @error('descripcion')
              <span class="invalid-feedback d-block" role="alert">
                  <strong>{{$message}}</strong>
              </span>
          @enderror
          <br>
          <label for="exampleFormControlTextarea1">Agrega una foto para el producto:</label>
          <br>
          <input type="file" name="imagen" accept="image/*" onchange="prevIMG(this)"> 
            </div>
            <br>
            <a type="button" class="btn btn-primary"  href="{{route('home')}}" >Atrás</a>
            <input type="submit" class="btn btn-success" value="Agregar Platillo">
          </form>
      </div>
      <div class="col-6 col-md-4">
        <form class="md-form">
            <div class="file-field">
              <div class="mb-4 text-center">
                <img id="previsualizar"  src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"   
                  class="rounded z-depth-1-half avatar-pic" alt="example placeholder avatar" width="100%" height="150px">
                 
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