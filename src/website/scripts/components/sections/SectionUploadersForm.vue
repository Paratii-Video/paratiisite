<template>
  <section id="faq" class="main-section paratii-uploaders">
    <div class="main-section-wrapper">
      <SectionHeader
        v-bind:title="content.title"
        v-bind:subtitle="content.subtitle"
      ></SectionHeader>

      <div class="main-section-content">
        <form
          class="paratii-form"
          action="/"
          method="post"
          id="paratii-uploaders-form"
          name="paratii-uploaders-form"
          target="_blank"
          v-on:submit.prevent="submitForm"
        >
          <template
            v-for="(item, index) in content.form.list"
          >
            <div
              class="paratii-label"
              v-if="item.type == 'checkbox'"
            >
              <p class="paratii-input-title">{{ item.label }}</p>
              <label
                class="paratii-label-checkbox"
                v-for="(item2, index2) in item.list"
              >
                <input
                  type="checkbox"
                  v-bind:name="item.name"
                  v-bind:value="item2.value"
                  v-bind:dataLabel="item.label"
                >
                {{ item2.value }}
              </label>
              <label
                class="paratii-label-checkbox"
                v-if="item.other"
              >
                <input
                  type="checkbox"
                  v-bind:name="item.name"
                  v-bind:value="other"
                  v-bind:dataLabel="item.label"
                >
                {{ item.other.label }}
                <input
                  class="paratii-input-other"
                  type="text"
                  name="other"
                  v-model="other"
                >
              </label>
            </div>
            <label
              class="paratii-label"
              v-else-if="item.type == 'textarea'"
            >
              <p class="paratii-input-title">{{ item.label }}</p>
              <textarea
                class="paratii-textarea"
                v-bind:name="item.name"
                v-bind:dataLabel="item.label"
              ></textarea>
            </label>
            <label
              class="paratii-label"
              v-else
              v-bind:for="'field-' + item.name"
            >
              <p class="paratii-input-title">{{ item.label }}</p>
              <input
                class="paratii-input"
                v-bind:type="item.type"
                v-bind:name="item.name"
                v-bind:autocomplete="item.name"
                v-bind:id="'field-' + item.name"
                v-bind:for="'field-' + item.name"
                v-bind:placeholder="item.placeholder"
                v-bind:dataLabel="item.label"
              />
            </label>
          </template>
          <button
            class="paratii-header-button main-button paratii-button--red"
            type="submit"
            id="paratii-uploaders-form-button"
          >Submit</button>
        </form>
      </div>
    </div>
  </section>
</template>

<script>
  import Firebase from 'firebase'

  import SectionHeader from '../shared/SectionHeader'

  var config = {
    apiKey: "AIzaSyC187tFq9uBLEvmIdmWtO6nWd0SdJ0vzKw",
    authDomain: "paratii-uploaders-efc29.firebaseapp.com",
    databaseURL: "https://paratii-uploaders-efc29.firebaseio.com",
    projectId: "paratii-uploaders-efc29",
    storageBucket: "",
    messagingSenderId: "452424270518"
  };
  
  let app = Firebase.initializeApp(config)
  let db = app.database()
  let booksRef = db.ref('books')

  console.log(app)
  console.log(db)
  console.log(booksRef)

  export default {
    props: ['content'],
    data () {
      return {
        other: ''
      }
    },
    components: {
      SectionHeader
    },
    methods: {
      submitForm (event) {
        const formElements = event.target.elements
        const formElementsObject = Object.keys(formElements)
        let formData = []
        let formElementLoop = undefined
        let self = this

        formElementsObject.map((item, index) => {
          formElementLoop = formElements[index]
          if (formElementLoop.type !== 'submit' && formElementLoop.name !== 'other') {
            if (formElementLoop.type === 'checkbox') {
              formData.push({
                label: formElementLoop.getAttribute('dataLabel'),
                value: formElementLoop.value ? formElementLoop.value : 'Other',
                checked: formElementLoop.checked
              })
            } else {
              formData.push({
                label: formElementLoop.getAttribute('dataLabel'),
                value: formElementLoop.value
              })
            }
          } 
        })

        let mailbody = ''
        formData.map(item => {
          if (item.checked === undefined) {
            mailbody += '- ' + item.label + '\n'
            mailbody += item.value  + '\n\n\n'
          } else {
            mailbody += '- ' + item.label + ' (' + item.value + ')' + '\n'
            mailbody += item.checked ? 'Yes' : 'No'  + '\n\n\n'
          }
        })
        
        // const link = "mailto:we@paratii.video?subject=This is my subject&body=" + encodeURIComponent(mailbody)
        // window.open(link, '_blank' )
        console.log(formData)

        booksRef.push(formData);
      }
    }
  }
</script>