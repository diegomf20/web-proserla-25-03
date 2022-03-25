import { createApp } from 'vue'
import Vue from 'vue'
import App from './App.vue'
// import VueAgile from 'vue-agile'
// createApp(App)
//   .use(VueAgile)
console.log("hola");
// createApp(App)
// .use(VueAgile);

var router = require('./router.js').default;

window.axios = require('axios');
import VueScrollTo from 'vue-scrollto'
Vue.use(VueScrollTo)
new Vue({
  el: '#app',
  router,
  render: h => h(App)
})