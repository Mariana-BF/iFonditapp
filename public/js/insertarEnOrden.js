

$(document).ready(function()
{
    $(document).on('input',"#cantidad",function(e)
    {
        let nombre =e.target.parentNode.firstChild.textContent;
        let precio =e.target.parentNode.firstChild.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.textContent;
        let cantidad =e.target.parentNode.lastChild.value;
        let total = parseInt(precio) * parseInt(cantidad);

        var value = document.querySelectorAll("#inputvalue");
        console.log(value);
        value.forEach( function(item)
        {
            item.value=cantidad;
        });
        
        console.log(value.value);

    });


    
    $(document).on('click',"#cancelar",function(e)
    {
        let div =e.target.parentNode;
        console.log(div);
        div.remove();
    });
    
})


    
