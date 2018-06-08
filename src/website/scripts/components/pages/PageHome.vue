<template>
  <main id="paratii-main" class="paratii-main">
    <SectionHeader
      v-bind:content="getLanguageContent.sections.header"></SectionHeader>
    <SectionAudiences
      v-bind:content="getLanguageContent.sections.audiences"></SectionAudiences>
    <SectionFeatures
      v-bind:content="getLanguageContent.sections.features"></SectionFeatures>
    <SectionComponents
      v-bind:content="getLanguageContent.sections.components"></SectionComponents>
    <SectionRoadmap
      v-bind:content="getLanguageContent.sections.roadmap"></SectionRoadmap>
    <SectionOpensource
      v-bind:content="getLanguageContent.sections.opensource"></SectionOpensource>
    <SectionTeam
      v-bind:content="getLanguageContent.sections.team"></SectionTeam>
    <SectionTeam
      v-bind:content="getLanguageContent.sections.advisors"
      advisors="true"
    ></SectionTeam>
    <SectionOnTheNews
      v-bind:content="getLanguageContent.sections.onthenews"></SectionOnTheNews>
    <SectionVideos
      v-bind:content="getLanguageContent.sections.videos"></SectionVideos>
  </main>
</template>

<script>
  import { mapGetters } from 'vuex'
  import SectionHeader from '../sections/SectionHeader'
  import SectionAudiences from '../sections/SectionAudiences'
  import SectionFeatures from '../sections/SectionFeatures'
  import SectionComponents from '../sections/SectionComponents'
  import SectionRoadmap from '../sections/SectionRoadMap'
  import SectionOpensource from '../sections/SectionOpenSource'
  import SectionTeam from '../sections/SectionTeam'
  import SectionOnTheNews from '../sections/SectionOnTheNews'
  import SectionVideos from '../sections/SectionVideos'

  export default {
    name: 'PageHome',
    components: {
      SectionHeader,
      SectionAudiences,
      SectionFeatures,
      SectionComponents,
      SectionRoadmap,
      SectionOpensource,
      SectionTeam,
      SectionOnTheNews,
      SectionVideos
    },
    computed: mapGetters(['getLanguageContent']),
    created () {
      this.$store.commit('navWhite', false)
    }
  }
</script>