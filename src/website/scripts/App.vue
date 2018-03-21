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
    <main id="main" class="paratii-main">
      <ParatiiHeader
        v-on:onOutOfTop="outOfTop($event)"
        v-bind:content="this.content.lang[indexLang].sections.header"></ParatiiHeader>
      <router-view></router-view>
      <Faq
        v-bind:content="this.content.lang[indexLang].sections.faq"></Faq>
      <Audiences
        v-bind:content="this.content.lang[indexLang].sections.audiences"></Audiences>
      <Features
        v-bind:content="this.content.lang[indexLang].sections.features"></Features>
      <Components
        v-bind:content="this.content.lang[indexLang].sections.components"></Components>
      <Roadmap
        v-bind:content="this.content.lang[indexLang].sections.roadmap"></Roadmap>
      <Opensource
        v-bind:content="this.content.lang[indexLang].sections.opensource"></Opensource>
      <Team
        v-bind:content="this.content.lang[indexLang].sections.team"></Team>
      <OnTheNews
        v-bind:content="this.content.lang[indexLang].sections.onthenews"></OnTheNews>
      <Videos
        v-bind:content="this.content.lang[indexLang].sections.videos"></Videos>
    </main>
    <MainFooter
      v-bind:content="this.content.lang[indexLang]"
    ></MainFooter>
  </div>
</template>

<script>
  import MainHeader from './components/main/MainHeader'
  import ParatiiHeader from './components/sections/Header'
  import Audiences from './components/sections/Audiences'
  import Features from './components/sections/Features'
  import Components from './components/sections/Components'
  import Roadmap from './components/sections/RoadMap'
  import Opensource from './components/sections/OpenSource'
  import Team from './components/sections/Team'
  import OnTheNews from './components/sections/OnTheNews'
  import Videos from './components/sections/Videos'
  import Faq from './components/sections/Faq'
  import MainFooter from './components/main/MainFooter'
  import MainSvg from './components/shared/MainSvg'
  import AppData from '../data/data.json';

  export default {
    name: 'app',
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
      MainFooter,
      ParatiiHeader,
      Audiences,
      Features,
      Components,
      Roadmap,
      Opensource,
      Team,
      OnTheNews,
      Videos,
      Faq
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
        this.isOutOfTop = event
      }
    },
    created () {
      window.addEventListener('resize', this.closeNav)
    },
    destroyed () {
      window.removeEventListener('resize', this.closeNav)
    }
  }
</script>

<style lang="scss">
  @import '../styles/main.scss';
</style>