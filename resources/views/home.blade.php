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
                        <td>
                            <a class="btn btn-dark mr-1 d-block w-100 mb-2" {{--href="{{ route('recetas.edit',['receta'=>$receta->id])}} "--}}>Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
