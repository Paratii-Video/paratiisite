<template>
  <section class="main-section paratii-audiences">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content">
      </div>
      <div class="main-section-content main-section-content--no-padding">
        <div class="paratii-audiences-list">
          <div class="paratii-audiences-item" v-for="item in content.list">
            <div class="paratii-audiences-item-icon" v-html="item.icon"></div>
            <div class="paratii-audiences-item-content">
              <h4 class="paratii-audiences-item-title"><strong>{{item.title}}</strong></h4>
              <p class="paratii-audiences-item-text">{{item.text}}</p>
            </div>
            <a class="paratii-audiences-item-link" v-bind:href="item.buttonHref" target="_blank">{{item.button}}</a>
          </div>
        </div>
        <div class="main-section-call">
          <p class="main-section-content-text" v-html="content.call.text"></p>
          <a class="paratii-button paratii-button--red" v-bind:href="content.call.buttonHref" target="_blank">{{content.call.button}}</a>
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
    }
  }
</script>