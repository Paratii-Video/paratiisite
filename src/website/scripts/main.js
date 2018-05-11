import axios from 'axios'
import Vue from 'vue'
import Vuex from 'vuex'
import getters from './store/getters'
import mutations from './store/mutations'
import actions from './store/actions'
import { router } from './routes'
import App from './App.vue'

axios.get('/data/website.json')
  .then(function (response) {
    let ParatiiData = response.data

    Vue.use(Vuex)

    new Vue({
      el: '#app',
      store: new Vuex.Store({
        state: {
          content: ParatiiData,
          lang: 0,
          showCover: true,
          isNavOpen: false,
          isOutOfTop: false,
          isNavWhite: false,
          isCampaignTheme: false
        },
        getters,
        mutations,
        actions
      }),
      router,
      render: h => h(App)
    })
  })
  .catch(function (error) {
    console.log(error);
  });
