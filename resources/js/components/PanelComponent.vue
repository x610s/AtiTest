<template>
    <div class="row">
        <NavbarComponent/>
            <ClienteComponent v-if="panel===1"/> 
            <PlanComponent v-if="panel===2"/>

    </div>  
</template>

<script>
import { mapState } from 'vuex'
import ClienteComponent from './ClienteComponent.vue';
import PlanComponent from './PlanComponent.vue';
import NavbarComponent from './Navbar.vue'
export default {

    computed: mapState([
        'panel'
    ]),

    components:{
        PlanComponent,
        ClienteComponent,
        NavbarComponent,
    }   
}
</script>