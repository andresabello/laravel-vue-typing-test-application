require('./bootstrap');
window.Vue = require('vue');
Vue.component('typing-test', require('./components/TypingTest.vue').default);

const app = new Vue({
    el: '#app'
});
