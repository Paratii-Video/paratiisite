<template>
  <ul class="main-nav-list">
    <template v-for="(item, index) in getLanguageContent.nav.list">
      <li
        class="main-nav-item"
        v-bind:class="[item.list ? 'main-subnav-holder' : null, item.class]"
        v-bind:key="index"
      >
        <h3>
          <a
            class="main-nav-link"
            v-bind:href="item.href"
            v-bind:target="item.target"
            v-on:click.prevent="goTo(item.href)"
            v-if="item.router"
          >{{item.label}}</a>
          <div
            class="main-nav-fake-link"
            v-else-if="!item.href"
          >{{item.label}}</div>
          <a
            class="main-nav-link"
            v-on:click="$store.commit('closeNav')"
            v-bind:href="item.href"
            v-bind:target="item.target"
            v-else
          >{{item.label}}</a>
        </h3>
        <div
          class="main-subnav"
          v-if="item.list"
        >
          <ul class="main-subnav-list">
            <li
              class="main-subnav-item"
              v-for="(item2, index2) in item.list"
            >
              <a
                class="main-subnav-link"
                v-bind:href="item2.href"
                v-bind:target="item2.target"
                v-on:click.prevent="goTo(item2.href)"
                v-if="item2.router"
              >{{item2.label}}</a>
              <a
                class="main-subnav-link"
                v-on:click="$store.commit('closeNav')"
                v-bind:href="item2.href"
                v-bind:target="item2.target"
                v-else
              >{{item2.label}}</a>
            </li>
          </ul>
        </div>
      </li>
    </template>
  </ul>
</template>

<script>
  import mixins from '../../../mixins'
  import { mapGetters } from 'vuex'

  export default {
    name: 'MainNav',
    mixins: [mixins],
    computed: mapGetters(['getLanguageContent', 'getLangLength'])
  }
</script>
