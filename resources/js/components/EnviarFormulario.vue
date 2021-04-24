<template>
    <input type="submit" 
    class="btn btn-success" 
    value="Completar Pedido"
    v-on:click="enviarFormulario "
    >   

</template>

<script>
export default {
    //props: ['platilloId'],
    methods: 
    {
        enviarFormulario()
        {
            this.$swal({
                title: 'Tu pedido  se completó exitosamente',
                text: "Podrás verlo en la sección de seguir pedido",
                icon: 'success',
                confirmButtonText: 'Entendido!',
            })
        
        }
    }
}
</script>