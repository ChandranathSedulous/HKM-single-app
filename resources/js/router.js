import Vue from 'vue';

import VueRouter from 'vue-router';

import adminpanel from './components/adminpanel'
// import footer from './components/header-component'

import login from './components/login'

import patron from './components/patron'

import addpatron from './components/addpatron'

import donorlist from './components/donorlist'

import adddonor from './components/adddonor'

import hkmadmin from './components/hkmadmin'
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
   component:adminpanel,
   children:[
    {
    	path:'/patron',
    	component:patron,
    },
    {
    	path:'/addpatron',
    	component:addpatron,
    },
    {
      path:'/donorlist',
      component:donorlist,
    },
     {
      path:'/adddonor',
      component:adddonor,
    },
   ]
   },

   {
    path:'/hkmadmin',
    component:hkmadmin,
   }
   
   // {
   //  path:'/patron',
   // component:patron

   // }


]

export default new VueRouter({routes});