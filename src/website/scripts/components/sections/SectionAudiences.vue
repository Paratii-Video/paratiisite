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
          <div
            class="paratii-audiences-item"
            v-for="(item, index) in content.list"
            v-bind:key="index"
          >
            <div class="paratii-audiences-item-icon" v-html="item.icon"></div>
            <div class="paratii-audiences-item-content">
              <h4 class="paratii-audiences-item-title"><strong>{{item.title}}</strong></h4>
              <p class="paratii-audiences-item-text">{{item.text}}</p>
            </div>
            <router-link
              class="paratii-audiences-item-link"
              v-bind:to="item.buttonHref"
              v-on:click="sendGA(item.ga)"
              v-if="item.router"
            >{{item.button}}</router-link>
            <a
              class="paratii-audiences-item-link"
              target="_blank"
              v-bind:href="item.buttonHref"
              v-on:click="sendGA(item.ga)"
              v-else
            >{{item.button}}</a>
          </div>
        </div>
        <div class="main-section-call">
          <p class="main-section-content-text" v-html="content.call.text"></p>
          <a
            class="paratii-button paratii-button--red"
            target="_blank"
            v-bind:href="content.call.buttonHref"
            v-on:click="sendGA(content.call.ga)"
          >{{content.call.button}}</a>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'
  import mixins from '../../mixins'

  export default {
    name: 'SectionAudiences',
    props: ['content'],
    mixins: [mixins],
    components: {
      SectionHeader
    }
  }
</script>