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

   require('/assets/plugins/bootstrap-toggle/js/bootstraptoggle.min.js');

	export default {


        
        components:{HeaderComponent,FooterComponent,sidebar,SideBarMenu,Dashboard},

         data(){

            return {


            }

         },

         mounted(){

      //     let recaptchaScript = document.createElement('script')
      //      recaptchaScript.setAttribute('src', 'assets/plugins/sidemenu/sidemenu.js')
      // document.head.appendChild(recaptchaScript)

     //  var a='ap';

     //  if(a == 'ap'){

     //  $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/css/hkm/hkm.css') );

     //   $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/css/hkm/custom-style-hkm.css'));

     //   $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/plugins/sidemenu/hkm/sidemenuhkm.css'));

     // }else if(a == 'hkm'){

     //   $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/css/ap/ap.css') );

     //   $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/css/ap/custom-style-ap.css'));

     //   $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'assets/plugins/sidemenu/ap/sidemenuap.css'));


     // }

            $('#hkmtoapid').bootstrapToggle({
          
            });
        },
      
    }

</script>
<!-- 
<script src="assets/plugins/sidemenu/sidemenu.js"></script>
 -->
<!-- <script src="../../assets/js/custom.js"></script> -->

<!-- <script >
  
  require('/assets/plugins/sidemenu/sidemenu.js')
</script> -->


</script>
<style  lang='css' scoped >

    /*@import '/assets/css/hkm/hkm.css';
    @import '/assets/css/hkm/custom-style-hkm.css';
    @import '/assets/plugins/sidemenu/hkm/sidemenuhkm.css'*/
     
</style>






<!-- <script type="text/javascript">
	import Header from './components/HeaderComponent'
	 export default {
       
        components:HeaderComponent
    }
</script> -->

