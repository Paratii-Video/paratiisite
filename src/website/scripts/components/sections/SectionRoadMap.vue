<template>
  <section class="main-section paratii-roadmap">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content">
        <p class="main-section-content-text">{{content.text}}</p>
      </div>
    </div>
    <img class="paratii-roadmap-map hide-phablet" src="/dist/assets/images/roadmap/map.png">
    <img class="paratii-roadmap-map show-phablet" src="/dist/assets/images/roadmap/map-mobile.png">
  </section>

</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    name: 'SectionRoadMap',
    props: ['content'],
    components: {
      SectionHeader
    },
    methods: {
      isRoadmapBetween (start, end) {
        return moment().isBetween(start, end);
      },
      isRoadmapPast (d) {
        return moment().isAfter(d);
      },
      roadmapClass (klass, item) {
        var temp = String;
        if (!this.isRoadmapBetween(item.dateStart, item.dateEnd)) {
          temp = (this.isRoadmapPast(item.dateEnd)) ? 'past' : 'future';
          return klass + temp;
        }
      },
      setLoopClass (start, end) {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
    }
  }
</script>