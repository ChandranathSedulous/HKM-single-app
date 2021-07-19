import Vue from 'vue';

import VueRouter from 'vue-router';

import adminpanel from './components/adminpanel'
// import footer from './components/header-component'

import login from './components/login'

// const foo = {template:'<div></div>'}

// const bar = {template:"<div>789</div>"}

Vue.use(VueRouter);

const routes = [
   {
   path:'/',
   component:login

   },
   {
   path:'/admin',
   component:adminpanel

   }


]

export default new VueRouter({routes});