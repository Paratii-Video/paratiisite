<template>
  <section class="main-section main-section--color paratii-roadmap">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>
      <div class="main-section-content main-section-content--with-margin">
        <p class="main-section-content-text">{{content.text}}</p>
      </div>
      <div class="main-section-content main-section-content--no-padding paratii-roadmap-content">

        <ol class="paratii-roadmap-list">
          <li
            class="paratii-roadmap-item"
            v-for="(item, index) in content.listA"
            v-bind:class="roadmapClass('paratii-roadmap-item--', item)"
            v-bind:key="index"
          >
            
            <div
              class="paratii-roadmap-item-icon"
              v-bind:class="setLoopClass('paratii-roadmap-item-icon--', index)"
            >
              <svg class="paratii-roadmap-item-svg">
                <use
                  v-bind:xlink:href="setLoopClass('dist/assets/svgs/paratii-roadmap-icons.svg#roadmap-icon-', index)"
                />
              </svg>
            </div>
            
            <p class="paratii-roadmap-item-text">{{item.text}}</p>
            <p class="paratii-roadmap-item-date"><span class="paratii-roadmap-item-date-icon"></span>{{item.textDate}}</p>
          </li>
        </ol>
        <ol class="paratii-roadmap-list paratii-roadmap-list--reverse">
          <li
           class="paratii-roadmap-item"
           v-for="(item, index) in content.listB"
           v-bind:class="roadmapClass('paratii-roadmap-item--', item)"
           v-bind:key="index"
          >
            <div
              class="paratii-roadmap-item-icon"
              v-bind:class="setLoopClass('paratii-roadmap-item-icon--', index)"
              v-bind:key="index"
            >
              <svg class="paratii-roadmap-item-svg">
                <use
                  v-bind:xlink:href="setLoopClass('dist/assets/svgs/paratii-roadmap-icons.svg#roadmap-icon-', (index + 5))"
                />
              </svg>
            </div>
            
            <p class="paratii-roadmap-item-text">{{item.text}}</p>
            <p class="paratii-roadmap-item-date"><span class="paratii-roadmap-item-date-icon"></span>{{item.textDate}}</p>
          </li>
        </ol>

        <span class="paratii-roadmap-path"></span>
      </div>
    </div>
  </section>

</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    name: 'SectionRoadMap',
    props: ['content'],
    components: {
      SectionHeader
    },
    methods: {
      isRoadmapBetween (start, end) {
        return moment().isBetween(start, end);
      },
      isRoadmapPast (d) {
        return moment().isAfter(d);
      },
      roadmapClass (klass, item) {
        var temp = String;
        if (!this.isRoadmapBetween(item.dateStart, item.dateEnd)) {
          temp = (this.isRoadmapPast(item.dateEnd)) ? 'past' : 'future';
          return klass + temp;
        }
      },
      setLoopClass (start, end) {
        if (String(start) && String(end)) {
          return start+end;
        }
      },
    }
  }
</script>