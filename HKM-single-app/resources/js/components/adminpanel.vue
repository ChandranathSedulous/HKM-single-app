
<template>
   <div class="page">
 

     <sidebar></sidebar>
   
   <div>
     
   </div>
<!--   <div >
  	<Dashboard></Dashboard>
  </div> -->
  <div class="main-content side-content pt-0">
   
   <header-component></header-component>
  
   </div>
  <!--  <div class="container-fluid">
      <Dashboard></Dashboard>
    
   </div> -->
  <div>
  
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
<style scoped lang="css">

  @import '~/assets/css/style.css';


</style>
<!-- <script type="text/javascript">
	import Header from './components/HeaderComponent'
	 export default {
       
        components:HeaderComponent
    }
</script> -->

