<template>
  <section class="campaign-status">
    <h3
      class="campaign-section-subtitle"
      v-text="content.title"
    />
    <ul class="campaign-status-list">
      <li
        class="campaign-status-item"
        v-for="(item, index) in content.list"
        v-bind:key="index"
      >
        <p
          class="campaign-status-text"
          v-text="item"
        />
      </li>
    </ul>
  </section>
</template>

<script>
  export default {
    name: "CampaignStatus",
    props: ['content']
  }
</script>