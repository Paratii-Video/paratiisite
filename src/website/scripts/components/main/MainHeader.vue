<template>
  <header class="main-header">
    <div class="main-section-wrapper main-header-wrapper">
      <ParatiiLogo></ParatiiLogo>
      <nav class="main-nav">
        <h2 class="visually-hidden">{{getLanguageContent.nav.title}}</h2>
        <a
          class="button-telegram"
          target="_blank"
          :href="getLanguageContent.nav.buttonTelegramHref">
          <svg class="button-telegram-icon">
            <use xlink:href="#icon-social-telegram-2" />
          </svg>
          <span>{{getLanguageContent.nav.buttonTelegram}}</span>
        </a>
        <NavLang />
        <MainNav />      
      </nav>
    </div>

    <button id="button-call-nav" class="button-call-nav" v-on:click="$store.commit('toggleNav')" title="Open and close navigation"></button>
  </header>
</template>

<script>
  import mixins from '../../mixins'
  import { mapGetters } from 'vuex'
  import ParatiiLogo from '../shared/ParatiiLogo'
  import NavLang from './header/NavLang'
  import MainNav from './header/MainNav'

  export default {
    name: 'MainHeader',
    components: {
      ParatiiLogo,
      NavLang,
      MainNav
    },
    mixins: [mixins],
    computed: mapGetters(['getLanguageContent'])
  }
</script>