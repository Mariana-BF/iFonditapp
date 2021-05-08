@extends('layouts.app') <!-- Barra y el footer-->

@section('content') <!-- Lo de enmedio -->
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
                @foreach ($infoPlatillos as $platillo)
                    <tr>
                        <td>{{$platillo->nombre}}</td>
                        <td>{{$platillo->categoria}}</td>
                        <td class="text-center">
                            <a class="btn btn-dark mr-1 w-50 mb-2" href="{{route('platillos.editar',['platillo'=>$platillo->id])}}" >Editar</a>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        <a type="button" class="btn btn-success w-50"  href="{{route('platillos.agregar')}}"  >Nuevo producto</a>
        </div>
    </div>

@endsection