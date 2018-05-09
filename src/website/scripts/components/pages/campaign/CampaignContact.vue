<template>
  <section class="campaign-contact campaign-section">
    <div class="campaign-section-wrapper">
      <h2
        class="campaign-section-title"
        v-html="content.title"
      />
      <p
        class="campaign-text campaign-contact-text"
        v-html="content.text"
      />
      <img
        class="campaign-contact-icon"
        v-bind:src="content.icon"
      />
      <a
        class="paratii-button campaign-button campaign-contact-button"
        target="_blank"
        v-bind:href="content.buttonHref"
        v-text="content.button"
      />
      <ul class="campaign-contact-list">
        <li
          class="campaign-contact-item"
          v-for="(item, index) in content.list"
          v-bind:key="index"
        >
          <a
            class="campaign-contact-item-link"
            target="_blank"
            v-bind:href="item.href"
          >
            <img
              class="campaign-contact-item-icon"
              v-bind:src="item.icon"
            /> 
          </a>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>

  export default {
    name: "CampaignContact",
    props: ['content']
  }
</script>