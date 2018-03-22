<template>
  <header class="main-header">
    <div class="main-section-wrapper main-header-wrapper">
      <Logo></Logo>
      <nav class="main-nav">
        <h2 class="visually-hidden">{{getLanguageContent.nav.title}}</h2>
        <div class="nav-lang">
          <template v-for="(item, index) in getContent.lang">
            <button
              class="main-nav-link nav-lang-button"
              v-bind:title="item.title"
              v-bind:class="{ active: index === $store.state.lang }"
              v-on:click="$store.commit('changeLanguage', index)"
            >{{ item.label }}</button>
            <span
              class="main-nav-link nav-lang-space"
              v-if="index < (getLangLength - 1)"
            >/</span>
          </template>
        </div>
        <ul class="main-nav-list">
          <template v-for="(item, index) in getLanguageContent.nav.list">
            <li
              class="main-nav-item"
              v-bind:class="{'main-subnav-holder': item.list}"
            >
              <h3>
                <router-link
                  class="main-nav-link"
                  v-on:click="$store.commit('closeNav')"
                  v-bind:to="{ path: item.href}"
                  v-bind:target="item.target"
                >{{item.label}}</router-link>
              </h3>
              <div
                class="main-subnav"
                v-if="item.list"
              >
                <ul class="main-subnav-list">
                  <li
                    class="main-subnav-item"
                    v-for="(item2, index2) in item.list"
                  >
                    <router-link
                      class="main-subnav-link"
                      v-bind:to="{ path: item.href}"
                      v-on:click="$store.commit('closeNav')"
                      v-bind:target="item2.target"
                    >{{item2.label}}</router-link>
                  </li>
                </ul>
              </div>
            </li>
          </template>
        </ul>
      </nav>
    </div>

    <button id="button-call-nav" class="button-call-nav" v-on:click="$store.commit('toggleNav')" title="Open and close navigation"></button>
  </header>
</template>

<script>
  import Logo from '../shared/Logo'
  import { mapGetters } from 'vuex'

  export default {
    components: {
      Logo
    },
    computed: mapGetters(['getContent', 'getLanguageContent', 'getLangLength'])
  }
</script>