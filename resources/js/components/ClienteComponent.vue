<template >
    <div class="pages-admin-cliente col-10">
        <formulario class="cliente-formulario"/>
    </div>
</template>

<script>
import formulario from './formulario'
export default {
    name: 'planComponent',
    components:{
         formulario,
    },
    data(){
        return {
            saludo: 'Cliente'
        }
    },
  
}
</script>