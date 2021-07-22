<template>
	<div>
	 <div class="page main-signin-wrapper">
			<!-- Row -->
			<div class="row text-center pl-0 pr-0 ml-0 mr-0">
				<div class="col-lg-3 d-block mx-auto">
					<div class="text-center mb-2 ">
						<img src="/assets/img/brand/hkm.jpg" class="header-brand-img mr-3" alt="logo">
						<img src="/assets/img/brand/ap2.png" class="header-brand-img" alt="logo">
					</div>
					<div class="card custom-card">
						<div class="card-body">
							<h4 class="text-center">Sign In</h4>
							<form action="#" >
								
								<div class="form-group text-left">
									<label>Email</label>
									<input class="form-control" placeholder="Enter your email" type="text">
								</div>
								<div class="form-group text-left">
									<label>Password</label>
									<input class="form-control" placeholder="Enter your password" type="password">
								</div>

								<div class="hkm-ap-toggle-login hkmtoap">
									<input type="checkbox" checked data-toggle="toggle" data-on="HKM" data-off="AP" data-onstyle="success" data-offstyle="danger" id="hkmtoapid" name="hkmtoapid">
								</div>

								<button type="button" class="mt-2 btn ripple btn-main-primary btn-block" @click="login">LOG IN</button>
							</form>
							<div class="mt-3 text-center">
								<p class="mb-1"><a href="">Forgot password?</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>
</template>

<script type="text/javascript">
	
	require('/assets/plugins/bootstrap-toggle/js/bootstraptoggle.min.js');

	export default {



		 mounted(){

            console.log('Component mounted.')

            $('#hkmtoapid').bootstrapToggle({
          
            });
        },

        methods:{

        	login:function(){

                
        		console.log(this.$router.push({path: '/admin'}));
        	}
        }
	}
</script>
<style scoped lang="css">

	 /*@import '/assets/plugins/bootstrap-toggle/css/bootstrap4-toggle.min.css'

	 /*@import "~/assets/plugins/sidemenu/ap/sidemenuap.css";
	  @import "~/assets/plugins/sidemenu/ap/sidemenuap.css";*/
</style>
<style scoped>
	.hkmtoap .toggle.btn
    {
        width: 50% !important;
    }
    .page
    {
        background-image: url('/assets/img/brand/login-bg.png');
        background-repeat: no-repeat;
        background-size: cover;
    }    
</style>