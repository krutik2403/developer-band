import Vue from 'vue';
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    { 
        path: '/', 
        name: 'home',
        component: require('./components/Home.vue').default
    },
    { 
        path: '/story', 
        name: 'story',
        component: require('./components/Story.vue').default 
    },
    { 
        path: '/contact', 
        name: 'contact',
        component: require('./components/Contact.vue').default 
    }
]
  
export const router = new VueRouter({
    routes 
})