import Vue from 'vue';
import VueSweetalert2 from 'vue-sweetalert2';


import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(VueSweetalert2);
import Swal from 'sweetalert2'
import axios from 'axios';
const app = new Vue({
    el: '#pricing',
    methods:{
        selectModule(number){
            axios.put('pricing/'+number)
            .then(res=>{
               this.successAlert();
                $(`#boton${number}`).remove();
            })
            .catch((e)=>{
                this.dangerAlert(e.data); 
            })
         },
         successAlert(){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
         },
         dangerAlert(){
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
              })
         }
        
    }
});