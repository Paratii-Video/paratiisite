const getters = {
  getContent: state => state.content,
  getIpInfo: state => state.ipInfo,
  getLanguageContent: state => state.content.lang[state.lang],
  getLangLength: state => state.content.lang.length,
  getLangLabel: state => state.content.lang[state.lang].label,
  isNavOpen: state => state.isNavOpen,
  isOutOfTop: state => state.isOutOfTop,
  isNavWhite: state => state.isNavWhite,
  showCover: state => state.showCover
}

export default getters
