import Vue from 'vue'
import VueRouter from 'vue-router'
import PageHome from '../components/pages/PageHome'
import PageFaq from '../components/pages/PageFaq'
import PageJoin from '../components/pages/PageJoin'
import PageCampaign from '../components/pages/PageCampaign'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: PageHome
  },
  {
    path: '/faq',
    component: PageFaq
  },
  {
    path: '/join',
    component: PageCampaign
  },
  {
    path: '/around-the-block',
    component: PageHome,
    redirect: () => {
      window.location.href = 'https://paratii.video/around-the-block/'
    }
  },
  { path: "*", component: PageHome }
]

export const router = new VueRouter({
  mode: 'history',
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