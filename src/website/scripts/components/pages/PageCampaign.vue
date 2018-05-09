<template>
  <main id="paratii-main" class="paratii-main page-campaign">
    <CampaignHeader v-bind:content="getContent.header"/>
    <CampaignAbout v-bind:content="getContent.about"/>
    <CampaignContact v-bind:content="getContent.contact"/>
  </main>
</template>

<script>
  import { mapGetters } from 'vuex'
  import CampaignHeader from './campaign/CampaignHeader'
  import CampaignAbout from './campaign/CampaignAbout'
  import CampaignContact from './campaign/CampaignContact'

  export default {
    name: 'PageCampaign',
    components: {
      CampaignHeader,
      CampaignAbout,
      CampaignContact
    },
    computed: {
      ...mapGetters(['getLanguageContent']),
      getContent () {
        return this.getLanguageContent.pages.campaign
      }
    },
    created () {
      this.$store.commit('navWhite', true)
      this.$store.commit('campaignTheme', true)
    },
    destroyed () {
      this.$store.commit('campaignTheme', false)
    }
  }
</script>