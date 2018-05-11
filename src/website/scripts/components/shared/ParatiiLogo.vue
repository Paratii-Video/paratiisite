<template>
  <h1 class="main-title">
    <a
      class="main-title-link"
      v-on:click.prevent="goTo('/')"
    >
      <svg class="main-title-svg"><use xlink:href="#paratii-logo"></use></svg>
    </a>
  </h1>
</template>

<script>
  import mixins from '../../mixins'

  export default {
    name: 'ParatiiLogo',
    mixins: [mixins]
  }
</script>