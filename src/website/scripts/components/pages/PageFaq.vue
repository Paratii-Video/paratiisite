<template>
  <main id="main" class="paratii-main">
    <Faq v-bind:content="content.sections.faq"></Faq>
  </main>
</template>

<script>
  import Faq from '../sections/Faq'

  export default {
    name: 'PageFaq',
    props: [
      'content'
    ],
    components: {
      Faq
    }
  }
</script>