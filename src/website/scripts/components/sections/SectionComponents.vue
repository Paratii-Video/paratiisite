<template>
  <section class="main-section paratii-components">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
    </div>
    <div
      class="paratii-components-content"
      v-for="(item, index) in content.list"
      v-bind:class="item.class"
      v-bind:key="index"
    >
      <div class="main-section-wrapper paratii-components-content-wrapper">
        <div class="paratii-components-entry">
          <h4 class="paratii-components-entry-title">
              <a class="main-social-link" v-bind:href="item.href" target="_blank">
                <svg class="main-social-svg"><use xlink:href="#icon-social-github"></use></svg>
              </a>{{item.title}}</h4>
          <p class="paratii-components-entry-text" v-html="item.text"></p>
        </div>
        <div
          v-if="item.video"
          class="paratii-components-asset"
          v-bind:class="setLoopClass('paratii-components-asset--',index)"
          key="paratii-components-asset"
        >
          <video
            class="paratii-components-video"
            type="video/mp4"
            loop
            autoplay
            v-bind:src="item.video"
            v-bind:ref="item.videoRef"
          >
          </video>
        </div>
        <div
          v-else
          class="paratii-components-asset"
          v-bind:class="setLoopClass('paratii-components-asset--',index)"
          v-bind:style="backgroundImage(item.image)"
          key="paratii-components-asset"
        />
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    props: ['content'],
    data () {
      return {
        hasVideo: false
      }
    },
    components: {
      SectionHeader
    },
    mounted () {
      let self = this

      if (Object.keys(this.$refs).length) {
        this.hasVideo = true
        window.addEventListener('scroll', (event) => {
          this.playVideoOnScroll(self, event)
        })
      }
    },
    destroyed () {
      if (Object.keys(this.$refs).length) {
        window.removeEventListener('scroll', (event) => {
          this.playVideoOnScroll(self, event)
        })
      }
    },
    methods: {
      backgroundImage (image) {
        return {
          'background-image': 'url(' + image + ')'
        }
      },
      setLoopClass: (start, end) => {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
      playVideoOnScroll: (self, event) => {
        Object.keys(self.$refs).map((item) => {
          const componentVideo = self.$refs[item][0]
          if (componentVideo) {          
            const { top, height } = componentVideo.getBoundingClientRect()

            if ((top - (height / 1.1)) < height && top > ((height / 1.7) * -1)) {
              componentVideo.play()
            } else {
              componentVideo.pause()
            }
          }
        })
      }
    }
  }
</script>