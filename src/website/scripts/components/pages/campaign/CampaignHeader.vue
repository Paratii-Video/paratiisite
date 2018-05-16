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
        :href="content.buttonHref"
        v-text="content.button"
      />
    </div>
  </section>
</template>

<script>
  import CampaignHeaderBg from './header/CampaignHeaderBackground'

  export default {
    name: "CampaignHeader",
    props: ['content'],
    components: {
      CampaignHeaderBg
    }
  }
</script>