<template>
  <div class="campaign-slider">
    <div
      class="campaign-slider-wrapper"
      v-on:click="changeSliderIndex(sliderIndex + 1)"
    >
      <img
        class="campaign-slider-image"
        v-for="(item, index) in content.list"
        v-bind:src="item.src"
        v-bind:class="{active: index === sliderIndex}"
        v-bind:key="index"
      />
    </div>
    <div class="campaign-slider-pagination">
      <button
        class="campaign-slider-pagination-button"
        v-for="(item, index) in content.list"
        v-bind:class="{active: index === sliderIndex}"
        v-on:click="changeSliderIndex(index)"
      />
    </div>
  </div>
</template>

<script>
  export default {
    name: "CampaignSlider",
    props: ['content'],
    data () {
      return {
        sliderIndex: 0
      }
    },
    computed: {
      sliderLength () {
        return this.content.list.length
      }
    },
    methods: {
      changeSliderIndex (index) {
        if (index > (this.sliderLength - 1)) {
          index = 0
        }
        this.sliderIndex = index
      }
    }
  }
</script>