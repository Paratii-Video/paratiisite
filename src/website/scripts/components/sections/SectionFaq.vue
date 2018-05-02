<template>
  <section id="faq" class="main-section main-section--top paratii-faq">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content">

        <div
          class="paratii-faq-group"
          v-for="(item, index) in content.list"
          v-bind:key="item.id"
        >
          <h4 class="paratii-faq-group-title">{{item.title}}</h4>
          <ul class="paratii-faq-list">
            <FaqItem
              v-for="(item2, index2) in item.group"
              v-bind:title="item2.title"
              v-bind:text="item2.text"
              v-bind:key="item2.id"
            />
            </FaqItem>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'
  import FaqItem from './faq/FaqItem'

  export default {
    props: ['content'],
    components: {
      SectionHeader,
      FaqItem
    }
  }
</script>