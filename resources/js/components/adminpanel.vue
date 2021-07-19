
<template>
   <div class="page">
 
   <div>
     <sidebar></sidebar>
   </div>
   <div>
     
   </div>
<!--   <div >
  	<Dashboard></Dashboard>
  </div> -->
  <div class="main-content side-content pt-0">
   
   <header-component></header-component>
   <div class="jumps-prevent" style="padding-top: 64px;"></div>

   </div>
   <div class="container-fluid">
      <Dashboard></Dashboard>
     <!-- <side-bar-menu></side-bar-menu> -->
   </div>
  <div>
  	<footer-component></footer-component>
  </div>
  </div>
</template>

<script >
	
	import HeaderComponent  from './HeaderComponent'
	import FooterComponent from './FooterComponent'
  import sidebar from './sidebar'
  import SideBarMenu from './SideBarMenu'
  import Dashboard from './dashboard'
	export default {
        
        components:{HeaderComponent,FooterComponent,sidebar,SideBarMenu,Dashboard}
    }

</script>

<!-- <script type="text/javascript">
	import Header from './components/HeaderComponent'
	 export default {
       
        components:HeaderComponent
    }
</script> -->

