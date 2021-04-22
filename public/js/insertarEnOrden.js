

$(document).ready(function()
{
    $(document).on('click',"#ordenar",function(e)
    {
        let nombre =e.target.parentNode.firstChild.textContent;
        let precio =e.target.parentNode.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.textContent;
        let cantidad =e.target.parentNode.lastChild.value;
        let total = parseInt(precio) * parseInt(cantidad);
        
        
        let platillo='<div> <hr class="my-1">';
        platillo+= "<p class='text-center'>"+nombre+" ..... x"+cantidad+"   total: $ "+total+"</p>";
        platillo+=  "<button type='button' id='cancelar' class='btn btn-danger'>Cancelar</button></div>";
        $("#contenido2").append(platillo);

    });

    
    $(document).on('click',"#cancelar",function(e)
    {
        let div =e.target.parentNode;
        console.log(div);
        div.remove();
    });
    
})


    
