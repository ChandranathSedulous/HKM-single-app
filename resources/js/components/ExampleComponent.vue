
<template >

	<div>
    <router-view></router-view>
   
    </div>
    

</template>



<script>
  
    export default {
      data(){

        return {
          
            a:false,
              
           }

      },

        mounted(){

        	console.log(this.a);
            console.log('Component mounted.')

           console.log(document.getElementById("ap1").getAttribute('href'));

           function update(filename,param){
               
               
               document.getElementById(param).setAttribute('href',filename)
           }

           function include(filename,param)
          	{
             var head = document.getElementsByTagName('head')[0];

   				var link = document.createElement('link');
   				link.href = filename;
   				link.rel  = 'stylesheet';
   				link.id = param;

   			head.appendChild(link)
			}  

			$("#hkmtoapid2").change(function(){

			var flag = document.getElementById("hkmtoapid2").checked;



			 if(flag){
                 
                localStorage.setItem('cond','HKM')
                   
                update('assets/css/hkm/hkm.css','Ap1');

                update('assets/css/hkm/custom-style-hkm.css','Ap2');

                update('assets/plugins/sidemenu/hkm/sidemenuhkm.css','Ap3');

               }else{
                  
                console.log('Ap')

                localStorage.setItem('cond','Ap')

                update('assets/css/ap/ap.css','Ap1');

                update('assets/css/ap/custom-style-ap.css','Ap2');

                update('assets/plugins/sidemenu/ap/sidemenuap.css','Ap3');


               }

           })

			console.log(localStorage.getItem('cond'))

            if(this.a){

                include('assets/css/hkm/hkm.css','Ap1');

                include('assets/css/hkm/custom-style-hkm.css','Ap2');

                include('assets/plugins/sidemenu/hkm/sidemenuhkm.css','Ap3');

            }else{

            	include('assets/css/ap/ap.css','Ap1');

                include('assets/css/ap/custom-style-ap.css','Ap2');

                include('assets/plugins/sidemenu/ap/sidemenuap.css','Ap3');

            }
        }
    }
</script>
<style scoped>


     
    /*@import '/assets/css/hkm/hkm.css';*/
  /*  @import '/assets/css/hkm/custom-style-hkm.css';
    @import '/assets/plugins/sidemenu/hkm/sidemenuhkm.css'*/

    
     
</style>

	


