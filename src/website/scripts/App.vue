<template>
  <div
    id="paratii-main"
    class="main-wrapper"
    v-bind:class="{ 'out-of-top': isOutOfTop, 'nav-open': isNavOpen }"
  >
    <MainSvg></MainSvg>
    <MainHeader
      v-bind:content="this.content"
      v-bind:languageIndex="indexLang"
      v-on:onChangeLanguage="changeLanguage($event)"
      v-on:onToggleNav="toggleNav"
      v-on:onCloseNav="closeNav"
    ></MainHeader>
    <router-view
      v-bind:content="this.content.lang[indexLang]"
      v-on:onOpenNav="openNav"
      v-on:onCloseNav="closeNav"
    ></router-view>
    <MainFooter
      v-bind:content="this.content.lang[indexLang]"
    ></MainFooter>
  </div>
</template>

<script>
  import MainHeader from './components/main/MainHeader'
  import MainFooter from './components/main/MainFooter'
  import MainSvg from './components/shared/MainSvg'
  import AppData from '../data/data.json'

  export default {
    name: 'App',
    data () {
      return {
        content: AppData,
        indexLang: 0,
        isOutOfTop: false,
        isNavOpen: false
      }
    },
    components: {
      MainSvg,
      MainHeader,
      MainFooter
    },
    methods: {
      changeLanguage (lang) {
        this.indexLang = lang
      },
      toggleNav () {
        this.isNavOpen = !this.isNavOpen
      },
      openNav () {
        this.isNavOpen = true
      },
      closeNav () {
        this.isNavOpen = false
      },
      outOfTop (event) {
        this.isOutOfTop = window.scrollY > 50
      }
    },
    created () {
      window.addEventListener('resize', this.closeNav)
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