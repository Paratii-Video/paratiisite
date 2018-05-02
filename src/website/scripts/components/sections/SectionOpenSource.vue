<template>
  <section class="main-section paratii-opensource">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content">
        <p 
          class="main-section-content-text"
          v-html="content.text"></p>
        <div class="paratii-opensource-buttons">
          <a
            class="paratii-opensource-button"
            target="_blank"
            v-bind:href="item.href"
            v-for="(item, index) in content.list"
            v-bind:class="setLoopClass('paratii-opensource-button--', index)"
            v-bind:index="index"
            v-bind:key="item.id" title="{item.title}"
          ><img
            class="paratii-opensource-button-image"
            v-bind:src="item.image">
          </a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    props: ['content'],
    components: {
      SectionHeader
    },
    methods: {
      setLoopClass (start, end) {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
    }
  }
</script>