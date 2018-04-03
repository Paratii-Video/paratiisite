<template>
  <main id="main" class="paratii-main">
    <Admin v-bind:content="getContent.lang"></Admin>
  </main>
</template>

<script>
  import Admin from '../sections/Admin'
  import { mapGetters } from 'vuex'

  export default {
    name: 'PageAdmin',
    components: {
      Admin
    },
    computed: mapGetters(['getContent', 'navWhite']),
    created () {
      this.$store.commit('navWhite', true)
    },
    destroyed () {
      this.$store.commit('navWhite', false)
    }
  }
</script>