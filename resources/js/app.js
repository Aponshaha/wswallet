require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('coin-component', require('./components/CoinComponent.vue').default);
Vue.component('buy-component', require('./components/BuyComponent.vue').default);
Vue.component('sell-component', require('./components/SellComponent.vue').default);
Vue.component('exchange-component', require('./components/ExchangeComponent.vue').default);
Vue.component()


let Myheader = require('./components/MyHeader.vue');

let Buy = require('./components/BuyComponent.vue');

let Sell = require('./components/SellComponent.vue');
 

const routes = [
  { path: '/buy', component: Buy },
  { path: '/sell', component: Sell },
  { path: '/exchange', component: require('./components/ExchangeComponent.vue') },
  
]

const router = new VueRouter({
  mode: 'history',
  routes
})



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// marquee text vue
import MarqueeText from 'vue-marquee-text-component'




Vue.component('marquee-text', MarqueeText)








/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    components: {Myheader}
});
