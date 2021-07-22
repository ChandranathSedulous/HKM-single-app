<template>
	<div class="page-header">
						<div>
							<h2 class="main-content-title tx-24 mg-b-5">DonorList</h2>
						
						</div>
						<div class="btn btn-list">
							<!-- <a class="btn ripple btn-primary" ><i class="fe fe-plus"></i> Add</a> -->

						<router-link to="/adddonor" class="btn ripple btn-primary"><i class="fe fe-plus"></i> Add</router-link>	
							
						</div>
					</div>
					
</template>
<script>
    export default {
        mounted(){

            console.log('Component mounted.')
        }
    }
</script>