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
            v-for="(item, index) in content.list"
            itemscope itemtype="http://schema.org/Person"
          >
            <a class="paratii-team-item-link" v-bind:href="item.url" target="_blank">
              <div class="paratii-team-item-avatar">
                <img class="paratii-team-item-image" v-bind:src="item.image" itemprop="image"  />
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