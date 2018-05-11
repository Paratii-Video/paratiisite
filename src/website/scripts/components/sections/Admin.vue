<template>
  <section id="admin" class="main-section paratii-admin">
    <div class="main-section-wrapper">
      <SectionHeader title="Admin" subtitle="Admin"></SectionHeader>
      <div class="main-section-content">
      </div>
    </div>
  </section>
</template>

<script>
  import SectionHeader from '../shared/SectionHeader'

  export default {
    name: 'Admin'
    props: ['content'],
    components: {
      SectionHeader
    }
  }
</script>