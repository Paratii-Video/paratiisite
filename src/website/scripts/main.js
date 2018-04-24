import Vue from 'vue'
import { router } from './routes'
import store from './store'
import App from './App.vue'

new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App),
  beforeCreate () {
    this.$store.dispatch('IpInfo')
  }
})