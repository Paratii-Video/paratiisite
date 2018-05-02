<template>
  <section id="team" class="main-section paratii-team" v-bind:class="{colorful: colorful}">
    <div class="main-section-wrapper">
      <SectionHeader
        nomargin
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content main-section-content--with-margin">
        <p class="main-section-content-text" v-html="content.text"></p>
      </div>
      <div
        class="main-section-content main-section-content--no-padding"
      >
        <div
          class="paratii-team-list"
          v-bind:class="{ few: fewItems }"
        >
          <article
            class="paratii-team-item"
            itemscope itemtype="http://schema.org/Person"
            v-for="(item, index) in content.list"
            v-bind:key="index"
          >
            <a
              class="paratii-team-item-link"
              target="_blank"
              v-bind:href="item.url"
            >
              <div class="paratii-team-item-avatar">
                <img
                  class="paratii-team-item-image"
                  itemprop="image"
                  v-bind:src="item.image"
                />
              </div>
            </a>
            <h4 class="paratii-team-item-name" itemprop="name">{{item.name}}</h4>
            <h5 class="paratii-team-item-jobtitle" itemprop="jobTitle">{{item.job}}</h5>
            <p class="paratii-team-item-resume" itemprop="description">{{item.text}}</p>
          </article>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    props: [
      'colorful',
      'content'
    ],
    components: {
      SectionHeader
    },
    computed: {
      fewItems () {
        return this.content.list.length < 3 
      }
    }
  }
</script>