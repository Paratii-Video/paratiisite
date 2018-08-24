<template>
  <main id="paratii-main" class="paratii-main">
    <SectionHeader
      v-if="getLanguageContent.sections.header"
      v-bind:content="getLanguageContent.sections.header"></SectionHeader>
    <SectionAudiences
      v-if="getLanguageContent.sections.audiences"
      v-bind:content="getLanguageContent.sections.audiences"></SectionAudiences>
    <SectionFeatures
      v-if="getLanguageContent.sections.features"
      v-bind:content="getLanguageContent.sections.features"></SectionFeatures>
    <SectionComponents
      v-if="getLanguageContent.sections.components"
      v-bind:content="getLanguageContent.sections.components"></SectionComponents>
    <SectionRoadmap
      v-if="getLanguageContent.sections.roadmap"
      v-bind:content="getLanguageContent.sections.roadmap"></SectionRoadmap>
    <SectionOpensource
      v-if="getLanguageContent.sections.opensource"
      v-bind:content="getLanguageContent.sections.opensource"></SectionOpensource>
    <SectionTeam
      v-if="getLanguageContent.sections.team"
      v-bind:content="getLanguageContent.sections.team"></SectionTeam>
    <SectionTeam
      v-if="getLanguageContent.sections.advisors"
      v-bind:content="getLanguageContent.sections.advisors"
      advisors="true"
    ></SectionTeam>
    <SectionOnTheNews
      v-if="getLanguageContent.sections.onthenews"
      v-bind:content="getLanguageContent.sections.onthenews"></SectionOnTheNews>
    <SectionVideos
      v-if="getLanguageContent.sections.videos"
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