import Vue from 'vue';
import Vuex, { mapState } from 'vuex'
import storeData from "../store/clientStore"

const app = new Vue({
    el: '#client',
    store: new Vuex.Store(
        storeData
     ),
     computed: mapState([
       'panel'
      ])
   
 
});

const app2 = new Vue({
  el: '#opciones',
  store: new Vuex.Store(
      storeData
   ),
   computed: mapState([
     'panel'
    ])
});

