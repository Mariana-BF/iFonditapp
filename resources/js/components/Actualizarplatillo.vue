<template>
    <input type="submit" 
    class="btn btn-success" 
    value="Actualizar Platillo"
    v-on:click="actualizarPlatillo"
    >   

</template>

<script>
export default {
    props: ['platilloId'],
    methods: 
    {
        actualizarPlatillo()
        {
            this.$swal({
                title: 'El platillo Ha sido Actualizado',
                text: "Se actualizará en el menú en seguida",
                icon: 'success'
            })
        }
    }
}
</script>