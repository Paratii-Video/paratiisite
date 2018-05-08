<template>
  <section class="campaign-vendors">
    <ul class="campaign-vendors-list">
      <li
        class="campaign-vendors-item"
        v-for="(item, index) in content.list"
        v-bind:key="index"
      >
        <div class="campaign-vendors-logo">
          <a
            class="campaign-vendors-link"
            target="_blank"
            v-bind:href="item.href"
          >
            <img
              class="campaign-vendors-svg"
              v-bind:src="item.icon"
            />
          </a>     
        </div>
        <p
          class="campaign-vendors-text"
          v-html="item.text"
        />
      </li>
    </ul>
  </section>
</template>

<script>
  export default {
    name: "CampaignVendors",
    props: ['content']
  }
</script>