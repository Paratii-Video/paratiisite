const mutations = {
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
  },
  showHideCover (state, payload) {
    state.showCover = payload === undefined ? !state.showCover : payload
  },
  campaignTheme (state, payload) {
    state.isCampaignTheme = payload
  }
}

export default mutations
