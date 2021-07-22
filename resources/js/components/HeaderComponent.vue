<template>
	<div>
	<div class="main-header side-header sticky">
					<div class="container-fluid">
						<div class="main-header-left">
							<a class="main-logo d-lg-none" href="">
								<img src="assets/img/brand/hkm.jpg" class="header-brand-img desktop-logo" alt="logo">

								<img src="assets/img/brand/hkm.jpg" class="header-brand-img icon-logo" alt="logo">

								<img src="assets/img/brand/hkm.jpg" class="header-brand-img desktop-logo theme-logo" alt="logo">
								
								<img src="assets/img/brand/hkm.jpg" class="header-brand-img icon-logo theme-logo" alt="logo">
							</a>
							<a class="main-header-menu-icon" href="" id="mainSidebarToggle"><span></span></a>
						</div>

						<div class="main-form-search p-2">
							<input class="form-control" placeholder="Search" type="search">
							<button class="btn"><i class="fe fe-search"></i></button>
						</div>
						
							<div class="hkm-ap-toggle hkmtoap">
								<input type="checkbox" data-toggle="toggle" data-on="HKM" data-off="AP" data-onstyle="success" data-offstyle="danger" id="hkmtoapid2" >
							</div>
						<div class="main-header-right">
						
							<div class="dropdown main-header-notification">
								<a class="nav-link icon" href="">
									<i class="fe fe-bell"></i>
									<span class="pulse bg-danger"></span>
								</a>
								<div class="dropdown-menu">
									<div class="header-navheading">
										<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
									</div>
									<div class="main-notification-list">
										<div class="media new">
											<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
											<div class="media-body">
												<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
											</div>
										</div>
										<div class="media">
											<div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
											<div class="media-body">
												<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
											</div>
										</div>
										<div class="media">
											<div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
											<div class="media-body">
												<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
											</div>
										</div>
									</div>
									<div class="dropdown-footer">
										<a href="">View All Notifications</a>
									</div>
								</div>
							</div>
							<div class="d-flex">
								<div class="justify-content-center align-self-center">
									<p class="mb-0">Welcome,Soniya</p>
								</div>
								<div class="dropdown main-profile-menu">

								<a class="main-img-user" href=""><img alt="avatar" src="assets/img/users/a.png"></a>
								<div class="dropdown-menu">
									<div class="header-navheading">
										<h6 class="main-notification-title">Sonia Taylor</h6>
										<p class="main-notification-text">Web Designer</p>
									</div>
									<a class="dropdown-item border-top" href="">
										<i class="fe fe-user"></i> My Profile
									</a>
									<a class="dropdown-item" href="">
										<i class="fe fe-edit"></i> Edit Profile
									</a>
									<a class="dropdown-item" href="">
										<i class="fe fe-settings"></i> Account Settings
									</a>
									<a class="dropdown-item" href="">
										<i class="fe fe-settings"></i> Support
									</a>
									<a class="dropdown-item" href="">
										<i class="fe fe-compass"></i> Activity
									</a>
									<a class="dropdown-item" v-on:click="signout" href="javascript:void(0)">
										<i class="fe fe-power"></i> Sign Out
									</a>
								</div>
							</div>
							</div>							
						</div>

					</div>
					
				
				</div>
				
				<div class="container-fluid">
				<!--   <Dashboard></Dashboard> -->
				
		<router-view></router-view> 
				  <footer-component></footer-component>
                    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

				</div>
			</div>

</template>
<script type="text/javascript">
	 import Dashboard from './dashboard'
	 import FooterComponent from './FooterComponent'
	 
	 export default {


	 	components:{Dashboard,FooterComponent},

	 	 methods:{

          changeparam:function(event){

            console.log('change')
          },
          signout:function(event){

          	console.log(456);
          }


        },
        mounted(){

        	 $('#hkmtoapid2').bootstrapToggle({
          
            });
        	 
        	$("#hkmtoapid2").change(function(){

               var flag = document.getElementById("hkmtoapid2").checked;

               // if(flag){
                 
               //    localStorage.setItem('cond','HKM')
                   
               //    console.log('HKM');

               // }else{
                  
               //    console.log('Ap')

               //    localStorage.setItem('cond','Ap')


               // }

              

        	})
        }
       
    }
</script>
<style scoped lang="css">
  @import '~/assets/css/ap/ap.css'
    @import '~/assets/css/ap/custom-style-ap.css'
    @import '~/assets/plugins/sidemenu/ap/sidemenuap.css'
</style>
