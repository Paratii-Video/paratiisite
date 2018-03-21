<template>
  <section id="faq" class="main-section paratii-faq">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content">

        <div class="paratii-faq-group" v-for="(item, index) in content.list">
          <h4 class="paratii-faq-group-title">{{item.title}}</h4>
          <ul class="paratii-faq-list">
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'
  import FaqItem from './faq/Item'

  export default {
    props: ['content'],
    components: {
      SectionHeader,
      FaqItem
    }
  }
</script>