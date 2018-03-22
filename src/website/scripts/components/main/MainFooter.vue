<template>
  <footer class="paratii-footer">
    <div class="main-section-wrapper">
      <div class="paratii-footer-wrapper">
        <p class="paratii-footer-text">{{getLanguageContent.footer.text}}</p>
        <aside id="follow-us" class="paratii-footer-social">
          <h2 class="paratii-footer-social-title">{{getLanguageContent.footer.social.title}}</h2>
          <ul class="main-social-list">
            <li class="main-social-item" v-for="item in getLanguageContent.footer.social.list">
              <h3 class="visually-hidden">{{item.title}}</h3>
                <a class="main-social-link" v-bind:href="item.href" target="_blank">
                  <svg class="main-social-svg" v-html="item.icon"></svg>
                </a>
            </li>
          </ul>
        </aside>
      </div>
    </div>
    <span class="paratii-footer-bg"></span>
  </footer>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    computed: mapGetters(['getLanguageContent'])
  }
</script> 