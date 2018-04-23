<template>
  <div
    class="main-wrapper"
    v-bind:class="mainClass"
  >
    <MainSvg></MainSvg>
    <MainHeader></MainHeader>
    <router-view></router-view>
    <MainFooter></MainFooter>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import MainHeader from './components/main/MainHeader'
  import MainFooter from './components/main/MainFooter'
  import MainSvg from './components/shared/MainSvg'

  export default {
    name: 'App',
    components: {
      MainSvg,
      MainHeader,
      MainFooter
    },
    computed: {
      ...mapGetters([
        'isNavOpen',
        'isOutOfTop',
        'isNavWhite',
        'getLangLabel'
      ]),
      mainClass () {
        return {
          'out-of-top': this.isOutOfTop || this.isNavWhite,
          'nav-open': this.isNavOpen,
          ['lang-' + this.getLangLabel]: true
        }
      }

    },
    methods: {
      onResize () {
        this.$store.commit('closeNav')
      },
      outOfTop () {
        this.$store.commit('outOfTop', window.scrollY > 100)
      }
    },
    created () {
      window.addEventListener('resize', this.onResize)
      window.addEventListener('scroll', this.outOfTop)
    },
    destroyed () {
      window.removeEventListener('resize', this.closeNav)
      window.removeEventListener('scroll', this.outOfTop)
    }
  }
</script>

<style lang="scss">
  @import '../styles/main.scss';
</style>