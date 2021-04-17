@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class="container">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <div class="col-12 col-md-8">
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre del platillo</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Aqui va el nombre">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Categoría</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Postres</option>
                <option>Entradas</option>
                <option>Plato fuerte</option>
                <option>Bebidas</option>
                <option>Otros</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Precio</label>
              <input class="form-control" id="exampleFormControlSelect2">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Atrás</button>
            <button type="button" class="btn btn-success">Guardar</button>
          </form>
      </div>
      <div class="col-6 col-md-4">
        <form class="md-form">
            <div class="file-field">
              <div class="mb-4 text-center">
                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                  class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar" width="150px">
              </div>
              <div class="d-flex justify-content-center">
                <div class="btn btn-mdb-color btn-rounded float-left">
                  <span>Add photo</span>
                  <input type="file">
                </div>
              </div>
            </div>
          </form>
    </div>
    </div>





@endsection