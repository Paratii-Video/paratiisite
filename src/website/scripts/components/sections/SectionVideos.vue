<template>
  <section class="main-section paratii-videos">
    <div class="main-section-wrapper">
      <SectionHeader
        nomargin
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content main-section-content--with-margin">
        <p class="main-section-content-text">{{content.text}}</p>
      </div>
      <div class="paratii-videos-list">
        <iframe
          class="paratii-videos-item"
          v-bind:src="item.url"
          webkitallowfullscreen="true"
          mozallowfullscreen="true"
          allowfullscreen="true" 
          v-for="(item, index) in content.list"
          v-bind:key="index"
        />
      </div>
        <div class="main-section-call">
          <a
            class="paratii-button paratii-button--red"
            target="_blank"
            v-bind:href="content.buttonHref"
          >{{content.button}}</a>
        </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    name: 'SectionVideos',
    props: ['content'],
    components: {
      SectionHeader
    }
  }
</script>