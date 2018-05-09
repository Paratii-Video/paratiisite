<template>
  <section class="campaign-about campaign-section">
    <div class="campaign-section-wrapper">
      <h2
        class="campaign-section-title"
        v-html="content.title"
      />
      <p
        class="campaign-text campaign-about-text"
        v-html="content.text"
      />
    </div>
    <div class="campaign-section-wrapper">
      <CampaignSlider
        v-show="getWidth > 1024"
        v-bind:content="content.slider"
      />
    </div>
    <div class="campaign-section-wrapper">
      <CampaignVendors v-bind:content="content.vendors" />
    </div>
    <CampaignStatus v-bind:content="content.status" />
  </section>
</template>

<script>
  import CampaignSlider from './about/CampaignSlider'
  import CampaignVendors from './about/CampaignVendors'
  import CampaignStatus from './about/CampaignStatus'

  export default {
    name: "CampaignAbout",
    components: {
      CampaignSlider,
      CampaignVendors,
      CampaignStatus
    },
    props: ['content'],
    data () {
      return {
        width: window.innerWidth
      }
    },
    computed: {
      getWidth () {
        return this.width
      }
    },
    methods: {
      onResize () {
        this.width = window.innerWidth
      }
    },
    created () {
      window.addEventListener('resize', this.onResize)
    },
    destroyed () {
      window.removeEventListener('resize', this.onResize)
    }
  }
</script>