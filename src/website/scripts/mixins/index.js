const mixins = {
  methods: {
    sendGA (options) {
      ga('send', {
        hitType: options.hitType,
        eventCategory: options.eventCategory,
        eventAction: options.eventAction,
        eventLabel: options.eventLabel,
        eventValue: options.eventValue
      });
    },
    goTo (to) {
      this.$store.commit('closeNav')
      this.$router.push(to)
    }
  }
}

export default mixins