import Vue from 'vue'
import Vuex from 'vuex'
import AppData from '../../data/data.json'
import getters from './getters'
import mutations from './mutations'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    content: AppData,
    lang: 0,
    isNavOpen: false,
    isOutOfTop: false,
    isNavWhite: false
  },
  getters,
  mutations
})

export default store