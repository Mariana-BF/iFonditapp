@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class="container">

<h1>Completar pedido </h1>

<h2 class="text-center mb-5">Platillos</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="colorTabla text-light">
                <tr class="text-center">
                    <th scole="col">Titulo</th>
                    <th scole="col">Categoría</th>
                    <th scole="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
               <!--aqui iba el foreach-->
                    <tr>
                        <td>a</td>
                        <td>b</td>
                        <td class="text-center">
                        c
                        </td>
                    </tr>
                <!--aqui iba el endforeach-->
            </tbody>
        </table>
        <div class="text-center">
        <a type="button" >Nuevo producto</a>
        </div>
    </div>



<form>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Instrucciones especiales</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Dirección</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">CP</label>
    <div class="col-md-2">
        <input type="text" class="form-control" id="inputZip">
    </div>
  </div>


    <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
                First radio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Second radio
              </label>
            </div>
          </div>
        </div>
      </fieldset>
  
</form>



</div>

@endsection