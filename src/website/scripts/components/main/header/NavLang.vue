<template>
  <div class="nav-lang">
    <template v-for="(item, index) in getContent.lang">
      <button
        class="main-nav-link nav-lang-button"
        v-bind:title="item.title"
        v-bind:class="{ active: index === $store.state.lang }"
        v-on:click="changeLanguage(index)"
      >{{ item.label }}</button>
      <span
        class="main-nav-link nav-lang-space"
        v-if="index < (getLangLength - 1)"
      >/</span>
    </template>
  </div>
</template>

<script>
  import mixins from '../../../mixins'
  import { mapGetters } from 'vuex'

  export default {
    name: 'NavLang',
    mixins: [mixins],
    computed: mapGetters(['getContent',  'getLangLength']),
    methods: {
      changeLanguage (index) {
        this.$store.commit('closeNav')
        this.$store.commit('changeLanguage', index)
      }
    }
  }
</script>
