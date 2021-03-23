
require('./bootstrap');
window.Vue = require('vue').default;

import Vuex from 'vuex'
import storeData from "./store/store"
Vue.use(Vuex)

Vue.component('plan-component', require('./components/PlanComponent.vue').default);
Vue.component('cliente-component', require('./components/ClienteComponent.vue').default);
Vue.component('panel-component', require('./components/PanelComponent.vue').default);
Vue.component('navbar-component', require('./components/Navbar.vue').default);
Vue.component('formulario', require('./components/formulario.vue').default);
Vue.component('comprar-component', require('./components/ComprarComponent.vue').default);



const app = new Vue({
    el: '#app',
    store: new Vuex.Store(
        storeData
     )
});



if (window.location.pathname.endsWith('/pricing')) {
    require('./pages/pricing');
}
if (window.location.pathname.endsWith('/panel')) {
    require('./pages/cliente');
}