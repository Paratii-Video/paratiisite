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
            <faq
              v-for="(item2, index2) in item.group"
              v-bind:title="item2.title"
              v-bind:text="item2.text"
            />
            </faq>
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
                ></p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    props: ['title', 'text'],
    components: {
      SectionHeader
    },
    data () {
      return {
        theHeight: '0px',
        isActive: this.title.length ? 0 : 1
      }
    },
    methods: {
      handleActive () {
        this.theHeight = this.isActive ? '0px' : this.$refs.text.offsetHeight + 'px'
        this.isActive = !this.isActive
      }
    },
    computed: {
      faqClass () {
        return this.isActive ? 'active' : null;
      }
    }
  }
</script>