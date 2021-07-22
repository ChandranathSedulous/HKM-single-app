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

  // import '/assets/css/ap/ap.css';

	export default {
        
        components:{HeaderComponent,FooterComponent,sidebar,SideBarMenu,Dashboard},

         data(){

            return {

              
            }

         },

         mounted(){

      //   let recaptchaScript = document.createElement('script')
      //   recaptchaScript.setAttribute('src', 'assets/plugins/sidemenu/sidemenu.js')
      // document.head.appendChild(recaptchaScript)

            // $('#hkmtoapid').bootstrapToggle({
          
            // });
        },
      
    }

</script>
<style lang='css' scoped>
   
  
    /*@import '/assets/css/ap/ap.css';*/
   /* @import '/assets/css/ap/custom-style-ap.css';*/
  /*  @import '/assets/plugins/sidemenu/ap/sidemenuap.css'*/
  
</style>