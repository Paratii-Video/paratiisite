import Vue from 'vue'
import Vuex from 'vuex'
import AppData from '../../data/data.json'
import getters from './getters'
import mutations from './mutations'
import actions from './actions'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    content: AppData,
    lang: 0,
    showCover: true,
    isNavOpen: false,
    isOutOfTop: false,
    isNavWhite: false
  },
  getters,
  mutations,
  actions
})

export default store