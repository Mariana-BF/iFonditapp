<template>
    <input type="submit" 
    class="btn btn-success" 
    value="Recibir mi orden"
    v-on:click="pedirOpinion"
    >   

</template>

<script>
export default {
    //props: ['platilloId'],
    methods: 
    {
        pedirOpinion()
        {
            this.$swal({
                       /* input: 'textarea',
                        inputLabel: '¿Qué le parecio el servicio?',
                        inputPlaceholder: 'Type your message here...',
                        inputAttributes: {
                            'aria-label': 'Type your message here'
                        },
                        showCancelButton: true*/
                       
               input: 'textarea',
                        inputLabel: '¿Qué le parecio el servicio?',
                inputPlaceholder: 'Escribe aquí tu opinión...',
                icon: 'success',
                confirmButtonText: 'Listo!',
                showCancelButton: true,
                cancelButtonText: 'Omitir',
            })
        }
    }
}
</script>

