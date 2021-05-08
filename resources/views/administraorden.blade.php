@extends('layouts.app') <!-- Barra y el footer-->

@section('content') <!-- Lo de enmedio -->
<h2 class="text-center mb-5">Administra tus ordenes</h2>
    <div class="col-md-10 mx-auto bg-white p-3">
        <a href="{{ route('home') }}" type="button" class="btn btn-primary mb-3">Volver</a>
        <h3 class="mb-3">Nuevas Ordenes</h3>
        <table class="table">
            <thead class="colorTabla text-light">
                <tr class="text-center">
                    <th scole="col">Acciones</th>
                    <th scole="col">Id Orden</th>
                    <th scole="col">Platillos</th>
                    <th scole="col">Anotaciones</th>
                    <th scole="col">Actualizar a</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orden as $item)
                    @if ($item->estatus==1)
                        <tr class="text-center">
                            <td class="text-center">
                                <a class="btn btn-danger mr-1 w-50 mb-2" href="{{ route('admin.deteleorden',['id' => $item->id ])}}">Cancelar</a>
                            </td>
                            <td>{{$item->id}}</td>
                            <td>
                                @foreach ($platillosPedidos as $platillo)
                                    @if ($item->id==$platillo->orden_id)
                                        <p>{{$platillo->nombre}}....X{{$platillo->cantidad}}</p>
                                        <br>
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$item->anotaciones}}</td>
                            <td class="text-center">
                                <a class="btn btn-success mr-1 w-50 mb-2" href="{{ route('admin.ordennueva',['id' => $item->id ])}}">Orden en proceso</a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        
        </div>
    </div> {{--Termina div de nuevas ordenes--}}
    
    <div class="col-md-10 mx-auto bg-white p-3">
        <h3 class="mb-3">Ordenes en proceso</h3>
        <table class="table">
            <thead class="colorTabla text-light">
                <tr class="text-center">
                    <th scole="col">Id Orden</th>
                    <th scole="col">Platillos</th>
                    <th scole="col">Actualizar a</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orden as $item)
                    @if ($item->estatus==2)
                        <tr class="text-center">
                            
                            <td>{{$item->id}}</td>
                            <td>
                                @foreach ($platillosPedidos as $platillo)
                                    @if ($item->id==$platillo->orden_id)
                                        <p>{{$platillo->nombre}}....X{{$platillo->cantidad}}</p>
                                    @endif
                                @endforeach
                            </td>
                            <td class="text-center">
                                <a class="btn btn-success mr-1 w-50 mb-2" href="{{ route('admin.ordenproceso',['id' => $item->id ])}}">Orden enviada</a>
                        </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        
        </div>
    </div> {{--Termina ordenes en proceso--}}

    <div class="col-md-10 mx-auto bg-white p-3">
        <h3 class="mb-3">Ordenes enviadas</h3>
        <table class="table">
            <thead class="colorTabla text-light">
                <tr class="text-center">
                    
                    <th scole="col">Id Orden</th>
                    <th scole="col">Platillos</th>
                    <th scole="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orden as $item)
                    @if ($item->estatus==3)
                        @php
                        $total=0;    
                        @endphp                    
                        <tr class="text-center">
                            <td>{{$item->id}}</td>
                            <td>
                                @foreach ($platillosPedidos as $platillo)
                                    @if ($item->id==$platillo->orden_id)
                                        <p>{{$platillo->nombre}}....X{{$platillo->cantidad}}</p>
                                        @php
                                            $total=$total + ($platillo->precio * $platillo->cantidad);    
                                        @endphp
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @php
                                    echo $total
                                @endphp 
                            </td>
                    </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div> {{--Termina div de ordenes enviadas--}}
@endsection