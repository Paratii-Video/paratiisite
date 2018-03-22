import Vue from 'vue'
import VueRouter from 'vue-router'
import PageHome from '../components/pages/PageHome'
import PageFaq from '../components/pages/PageFaq'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: PageHome
  },
  {
    path: '/faq',
    component: PageFaq
  }
]

export const router = new VueRouter({
  routes
})

export default routes