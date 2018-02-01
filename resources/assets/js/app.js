
require('jquery');
require('./bootstrap');

//import Vue from 'vue';
window.Vue = require('vue');
import VueRouter from 'vue-router';

//componentes
/*import landing from './components/landing/Example.vue';*/
import login from './components/vistasComponentes/inicioSesion.vue';
import landing from './components/vistasComponentes/index.vue';
import terminosYCondiciones from './components/vistasComponentes/terminosYCondiciones.vue';
import politicasYPrivacidad from './components/vistasComponentes/politicasYPrivacidad.vue';
import read from './components/vistasComponentes/read.vue';
import acercaDeNosotros from './components/vistasComponentes/acercaDeNosotros.vue';
//import App from './components/App.vue'
//import routes from './routes.js';
const routes = [
  {
    path: '/',
    component: landing
  },{
    path: '/login',
    component: login
  },{
    path: '/terminosYCondiciones',
    component: terminosYCondiciones
  },{
    path:'/politicasYPrivacidad',
    component: politicasYPrivacidad
  },{
    path:'/read',
    component: read
  },{
    path:'/acercaDeNosotros',
    component: acercaDeNosotros
  }
];
Vue.use(VueRouter);

//Vue.component('example', require('./components/Example.vue'));

const router = new VueRouter({
  routes
});

new Vue({
    router
}).$mount("#app");
