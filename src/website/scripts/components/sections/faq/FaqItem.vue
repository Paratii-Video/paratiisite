<template>
  <li
    class="paratii-faq-item"
    v-bind:class="faqClass"
  >
    <h4
      class="paratii-faq-item-title"
      @click="handleActive()"
    >
      {{ title }}
      <svg class="paratii-faq-item-icon">
        <use xlink:href="#icon-faq-arrow"/>
      </svg>
    </h4>
    <div
      class="paratii-faq-item-entry"
      v-bind:style="{ height: theHeight }"
    >
      <p
        class="paratii-faq-item-text"
        ref="text"
        v-html="text"
      >
      </p>
    </div>
  </li>
</template>

<script>
  export default {
    props: ['title', 'text'],
    data () {
      return {
        theHeight: '0px',
        isActive: this.title.length ? 0 : 1
      }
    },
    computed: {
      faqClass () {
        return this.isActive ? 'active' : null;
      }
    },
    methods: {
      handleActive () {
        this.theHeight = this.isActive ? '0px' : this.$refs.text.offsetHeight + 'px';
        this.isActive = !this.isActive;
      }
    }
  }
</script>