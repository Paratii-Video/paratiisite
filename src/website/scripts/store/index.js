import Vue from 'vue'
import Vuex from 'vuex'
import AppData from '../../data/data.json'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    content: AppData,
    lang: 0,
    isNavOpen: false,
    isOutOfTop: false,
    isNavWhite: false
  },
  getters: {
    getContent: state => state.content,
    getLanguageContent: state => state.content.lang[state.lang],
    getLangLength: state => state.content.lang.length,
    isNavOpen: state => state.isNavOpen,
    isOutOfTop: state => state.isOutOfTop,
    isNavWhite: state => state.isNavWhite
  },
  mutations: {
    changeLanguage (state, payload) {
      state.lang = payload
    },
    openNav: state => state.isNavOpen = true,
    closeNav: state => state.isNavOpen = false,
    toggleNav: state => state.isNavOpen = !state.isNavOpen,
    navWhite (state, payload) {
      state.isNavWhite = payload
    },
    outOfTop (state, payload) {
      state.isOutOfTop = payload
    }
  }
})

export default store