<template>
  <section class="paratii-header">
    <span class="paratii-header-bg"></span>
    <div class="main-section-wrapper">
      <span class="paratii-header-asset" v-bind:style="backgroundImage(content.image)"></span>
      <div class="paratii-header-content">
        <h2 class="paratii-header-title" ref="ParatiiHeaderTitle">{{content.title}}</h2>
        <p class="paratii-header-text">{{content.text}}</p>
      </div>
      <div class="paratii-header-subscribe">
        <form class="paratii-header-form" action="https://video.us15.list-manage.com/subscribe/post?u=3363d6d446b55bfeec00cb430&id=d12f33be57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
          <label class="paratii-header-label" for="mce-EMAIL">
            <input class="paratii-header-input" type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="your@email.here" />
          </label>
          <button class="paratii-header-button paratii-button-border" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">{{content.buttonB}}</button>

          <div class="visually-hidden" id="mce-responses">
            <div class="visually-hidden" id="mce-error-response" style="display:none"></div>
            <div class="visually-hidden" id="mce-success-response" style="display:none"></div>
            <input class="visually-hidden" type="text" name="b_3363d6d446b55bfeec00cb430_d12f33be57" tabindex="-1" value="">
          </div>
        </form>
      </div>
      <p class="paratii-header-small" v-html="content.small"></p>
    </div>
  </section>
</template>

<script>
  export default {
    props: ['content'],
    methods: {
      backgroundImage (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      },
      checkTitleCollision (event) {
        let scrollY = window.scrollY
        // let titleY = this.$refs.ParatiiHeaderTitle.offsetParent.offsetTop
        let titleY = 50
        this.$emit('onOutOfTop', titleY < scrollY)
      }
    },
    created () {
      window.addEventListener('scroll', this.checkTitleCollision)
    },
    destroyed () {
      window.removeEventListener('scroll', this.checkTitleCollision)
    }
  }
</script>