<template>
       <div class="col-12 col-xl-2 col-md-2 shadow   pages-admin-opciones">
        <div class="box row mx-auto" @click="changePanel(1)">
            <div class="col-2 d-flex align-items-center ">
                <i class="fas fa-user"></i>
            </div>
            <div class="col-10  text-left">
                <h4 class="mt-2" >Nuevo cliente</h4>
            </div>  
        </div>

        <!-- <div class="box row mx-auto">
            <div class="col-2 d-flex align-items-center ">
                <i class="fas fa-pencil-alt"></i>
            </div>
            
            
            <div class="col-10  text-left">
                <h4 class="mt-2">Modificar cliente</h4>
            </div>  
        </div> -->


        <div class="box row mx-auto" @click="changePanel(2)">
            <div class="col-2 d-flex align-items-center ">
                <i class="fas fa-drafting-compass"></i>
            </div>
            
            
            <div class="col-10  text-left">
                <h4 class="mt-2" >Nuevo Plan</h4>
            </div>  
        </div>

<!-- 
        <div class="box row mx-auto">
            <div class="col-2 d-flex align-items-center ">
                <i class="fas fa-wrench"></i>
            </div>
            
            
            <div class="col-10  text-left">
                <h4 class="mt-2">Modificar Plan</h4>
            </div>  
        </div> -->
        
    </div>  
</template>
<script>
import { mapMutations } from 'vuex'
export default {
   
   methods: mapMutations([
       'changePanel'
   ])
}
</script>