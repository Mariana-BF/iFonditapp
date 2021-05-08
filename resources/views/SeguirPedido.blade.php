@extends('layouts.app') <!-- Barra y el footer-->

@section('content')

<div class='container'>

  

    <br>
    <br>
    <br>
    <h1> El estatus de tu orden es: </h1>
    <h2> 
      

      @if ( $orden->estatus ==0 )
      Aún no has ordenado nada, visita nuestro menú
      @endif

      @if ( $orden->estatus ==1 )
      
          Tu orden ha sido confirmada!
          <div class="text-center">
            <img id="previsualizar"  src="/storage//platillos/confirmada.png"   
            class="d-block w-100" alt="example placeholder avatar" width="150px" height="300px">
            <p>Si deseas cancelar tu pedido, éste es el único momento en que podrás hacerlo</p>
            <cancelar-pedido></cancelar-pedido>
            </div>
      
      @endif

      @if ($orden->estatus ==2)
       ¡Tu orden esta siendo preparada!
      <div class="text-center">
        <img id="previsualizar"  src="/storage//platillos/progreso.png"   
        class="d-block w-100" alt="example placeholder avatar" width="150px" height="300px">
        </div>
      @endif

      @if ($orden->estatus ==3)
      ¡Tu orden ya va en camino!
     <div class="text-center">
       <img id="previsualizar"  src="/storage//platillos/Enviada.png"   
       class="d-block w-100" alt="example placeholder avatar" width="150px" height="300px">
       </div>
       <div class="text-center">

        <orden-recibida></orden-recibida>
    
        </div>
     @endif

     
    </h2>

 
 


</div>




@endsection