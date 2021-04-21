
$( document).ready(function() {

    $("#platofuerte").click(function() {
        $('#contenido').empty();
        $.ajax(
            {
                url: '/user/comida',
                method: 'GET',
                data:$("#form1").serialize()
            }).done(function(res)
            {
                var arreglo = JSON.parse(res);
                console.log(arreglo);
                for(var x = 0; x<arreglo.length;x++)
                {
                    var todo = "<div class='portfolio__item'>";
                    todo +='<img src="/storage/'+arreglo[x].imagen+'"width="100%">';
                    todo +="<div class='portfolio__desc text-center'>";
                    todo +="<h3 class='portfolio__title'>"+arreglo[x].nombre+"</h3>";
                    todo +="<a href='#"+arreglo[x].id+"' class='button'>ordenar</a>"
                    todo +="</div>"
                    todo +="</div>";
                     console.log();
                    $('#contenido').append(todo);
        
                }
            });       
  });

  $("#bebidas").click(function() {
    $('#contenido').empty();
    $.ajax(
        {
            url: '/user/bebida',
            method: 'GET',
            data:$("#form1").serialize()
        }).done(function(res)
        {
            var arreglo = JSON.parse(res);
            console.log(arreglo);
            for(var x = 0; x<arreglo.length;x++)
            {
                var todo = "<div class='portfolio__item'>";
                todo +='<img src="/storage/'+arreglo[x].imagen+'"width="100%">';
                todo +="<div class='portfolio__desc text-center'>";
                todo +="<h3 class='portfolio__title'>"+arreglo[x].nombre+"</h3>";
                todo +="<a href='#"+arreglo[x].id+"' class='button'>ordenar</a>"
                todo +="</div>"
                todo +="</div>";
                 console.log();
                $('#contenido').append(todo);
    
            }
        });       
});

        $("#postres").click(function() {
        $('#contenido').empty();
        $.ajax(
        {
            url: '/user/postre',
            method: 'GET',
            data:$("#form1").serialize()
        }).done(function(res)
        {
            var arreglo = JSON.parse(res);
            console.log(arreglo);
            for(var x = 0; x<arreglo.length;x++)
            {
                var todo = "<div class='portfolio__item'>";
                todo +='<img src="/storage/'+arreglo[x].imagen+'"width="100%">';
                todo +="<div class='portfolio__desc text-center'>";
                todo +="<h3 class='portfolio__title'>"+arreglo[x].nombre+"</h3>";
                todo +="<a href='#"+arreglo[x].id+"' class='button'>ordenar</a>"
                todo +="</div>"
                todo +="</div>";
                 console.log();
                $('#contenido').append(todo);
    
            }
        });       
});

            
});