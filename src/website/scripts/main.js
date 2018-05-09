import Vue from 'vue'
import Vuex from 'vuex'
import store from './store'
import { router } from './routes'
import App from './App.vue'

new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App)
})