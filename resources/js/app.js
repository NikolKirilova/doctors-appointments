require('./bootstrap');


 
window.Vue = require('vue').default;



Vue.component('find-doctor', require('./components/FindDoctor.vue').default);
 





const app = new Vue({
  el: '#app',
});