const actions = {
  setNavigatorLang ({ commit, state, getters }) {
    let langIndex = 0;
    let navLang = navigator.language
    const languages = getters.getContent.lang
    languages.filter((item, index) => {
      if (navLang.includes(item.language)) {
        langIndex = index
      }
    })
    commit('changeLanguage', langIndex)
    setTimeout(() => commit('showHideCover', false), 100)
  }
}

export default actions
