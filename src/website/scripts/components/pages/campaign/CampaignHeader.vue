<template>
  <section class="campaign-header">
    <CampaignHeaderBg class="campaign-header-background" />
    <div class="campaign-header-content">
      <h2
        class="campaign-header-title"
        v-html="content.title"
      />
      <p
        class="campaign-text campaign-header-text"
        v-html="content.text"
      />
      <a
        class="paratii-button campaign-button"
        target="_blank"
        v-text="content.button"
        v-bind:href="content.buttonHref"
        v-on:click="sendGA(content.ga)"
      />
    </div>
  </section>
</template>

<script>
  import CampaignHeaderBg from './header/CampaignHeaderBackground'
  import mixins from '../../../mixins'

  export default {
    name: "CampaignHeader",
    props: ['content'],
    mixins: [mixins],
    components: {
      CampaignHeaderBg
    }
  }
</script>