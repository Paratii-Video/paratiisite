import axios from 'axios'

const actions = {
  IpInfo ({ commit, state, getters }) {
    const self = this
    let timeout = setTimeout(() => commit('showHideCover', false), 1000)

    axios
      .get('http://ip-api.com/json')
      .then(response => {
        clearTimeout(timeout)
        setTimeout(() => commit('showHideCover', false), 100)

        commit('setIpInfo', response.data)

        const countryCode = getters.getIpInfo.countryCode
        const languages = getters.getContent.lang
        let langIndex = 0

        languages.filter((item, index) => {
          if (item.countryCode.includes(countryCode)) {
            langIndex = index
          }
        })
        commit('changeLanguage', langIndex)
      })
      .catch(function (error) {
        console.log('ip-api request:')
        console.error(error)
        clearTimeout(timeout)
        commit('showHideCover', false)
      })
  }
}

export default actions
