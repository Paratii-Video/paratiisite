<template>
  <header class="main-header">
    <div class="main-section-wrapper main-header-wrapper">
      <Logo></Logo>
      <nav class="main-nav">
        <h2 class="visually-hidden">{{content.lang[languageIndex].nav.title}}</h2>
        <div class="nav-lang">
          <template v-for="(item, index) in this.content.lang">
            <button
              class="main-nav-link nav-lang-button"
              v-bind:title="item.title"
              v-bind:class="{ active: index === languageIndex }"
              v-on:click="changeLang(index, $event)"
            >{{ item.label }}</button>
            <span
              class="main-nav-link nav-lang-space"
              v-if="index < (langLength - 1)"
            >/</span>
          </template>
        </div>
        <ul class="main-nav-list">
          <template v-for="(item, index) in content.lang[languageIndex].nav.list">
            <li
              class="main-nav-item"
              v-bind:class="{'main-subnav-holder': item.list}"
              v-bind:target="item.target"
            >
              <h3>
                <a
                  class="main-nav-link"
                  v-bind:href="item.href"
                  v-on:click="$emit('onCloseNav')"
                >{{item.label}}</a>
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
                    <a
                      class="main-subnav-link"
                      v-bind:href="item2.href"
                      v-on:click="$emit('onCloseNav')"
                      v-bind:target="item2.target"
                    >{{item2.label}}</a>
                  </li>
                </ul>
              </div>
            </li>
          </template>
        </ul>
      </nav>
    </div>

    <button id="button-call-nav" class="button-call-nav" v-on:click="$emit('onToggleNav')" title="Open and close navigation"></button>
  </header>
</template>

<script>
  import Logo from '../shared/Logo'
  export default {
    props: {
      content: {
        type: Object,
        default: {}
      },
      languageIndex: {
        type: Number,
        default: 0
      }
    },
    data () {
      return {
        langLength: this.content.lang.length
      }
    },
    components: {
      Logo
    },
    methods: {
      changeLang (lang, event) {
        this.$emit('onChangeLanguage', lang)
      }
    }
  }
</script>