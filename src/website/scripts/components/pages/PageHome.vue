<template>
  <main id="main" class="paratii-main">
    <ParatiiHeader
      v-bind:content="getLanguageContent.sections.header"></ParatiiHeader>
    <Audiences
      v-bind:content="getLanguageContent.sections.audiences"></Audiences>
    <Features
      v-bind:content="getLanguageContent.sections.features"></Features>
    <Components
      v-bind:content="getLanguageContent.sections.components"></Components>
    <Roadmap
      v-bind:content="getLanguageContent.sections.roadmap"></Roadmap>
    <Opensource
      v-bind:content="getLanguageContent.sections.opensource"></Opensource>
    <Team
      v-bind:content="getLanguageContent.sections.team"></Team>
    <Team
      v-bind:content="getLanguageContent.sections.advisors"
      colorful="true"
    ></Team>
    <OnTheNews
      v-bind:content="getLanguageContent.sections.onthenews"></OnTheNews>
    <Videos
      v-bind:content="getLanguageContent.sections.videos"></Videos>
  </main>
</template>

<script>
  import { mapGetters } from 'vuex'
  import ParatiiHeader from '../sections/Header'
  import Audiences from '../sections/Audiences'
  import Features from '../sections/Features'
  import Components from '../sections/Components'
  import Roadmap from '../sections/RoadMap'
  import Opensource from '../sections/OpenSource'
  import Team from '../sections/Team'
  import OnTheNews from '../sections/OnTheNews'
  import Videos from '../sections/Videos'

  export default {
    name: 'PageHome',
    components: {
      ParatiiHeader,
      Audiences,
      Features,
      Components,
      Roadmap,
      Opensource,
      Team,
      OnTheNews,
      Videos
    },
    computed: mapGetters(['getLanguageContent'])
  }
</script>