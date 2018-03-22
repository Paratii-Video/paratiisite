import Vue from 'vue'
import VueRouter from 'vue-router'
import PageHome from '../components/pages/PageHome'
import PageFaq from '../components/pages/PageFaq'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: PageHome
  }
]

export const router = new VueRouter({
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return { selector: to.hash }
    } else if (savedPosition) {
        return savedPosition;
      } else {
      return { x: 0, y: 0 }
    }
  }
})

export default routes