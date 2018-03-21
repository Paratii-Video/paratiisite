<template>
  <div class="main-color-section main-section--color paratii-onthenews">
    <div class="main-section-wrapper main-color-section-wrapper">
      <h2 class="main-section-title">{{content.title}}</h2>
      <div class="paratii-onthenews-buttons">
        <a class="paratii-onthenews-button" v-bind:href="item.href" target="_blank" v-for="(item, index) in content.list">
          <img class="paratii-onthenews-button-image" v-bind:src="item.image" />
        </a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['content']
  }
</script>