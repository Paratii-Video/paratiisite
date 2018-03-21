<template>
  <main id="main" class="paratii-main">
    <ParatiiHeader
      v-bind:content="content.sections.header"></ParatiiHeader>
    <Audiences
      v-bind:content="content.sections.audiences"></Audiences>
    <Features
      v-bind:content="content.sections.features"></Features>
    <Components
      v-bind:content="content.sections.components"></Components>
    <Roadmap
      v-bind:content="content.sections.roadmap"></Roadmap>
    <Opensource
      v-bind:content="content.sections.opensource"></Opensource>
    <Team
      v-bind:content="content.sections.team"></Team>
    <OnTheNews
      v-bind:content="content.sections.onthenews"></OnTheNews>
    <Videos
      v-bind:content="content.sections.videos"></Videos>
  </main>
</template>

<script>
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
    props: [
      'content'
    ],
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
    }
  }
</script>