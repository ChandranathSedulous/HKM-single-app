<template>
	<div>
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Donor</h2>
		</div>
	</div>
	<div class="row">
				<div class="col-xl-12 col-lg-12">
			<div class="card custom-card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-2">			    
							<div class="form-group">
								<p class="mg-b-10">Name</p>
									<select name="userprofile" id="userprofile" class="form-control">
										<option value="">Select</option>
										<option value="sri">SRI</option>
										<option value="smt">SMT.</option>
										<option value="mr">MR.</option>
										<option value="mrs">MRS.</option>
										<option value="ms">MS.</option>
										<option value="dr">DR.</option>
										<option value="mss">M/S</option>
										<option value="prof">PROF.</option>
										<option value="aircdr">AIR CDR.</option>
										<option value="brig">BRIG.</option>
										<option value="capt">CAPT.</option>
										<option value="cdr">CDR.</option>
										<option value="col">COL.</option>
										<option value="lion">LION</option>
										<option value="ltcol">LT COL.</option>
										<option value="major">MAJOR</option>
										<option value="sqnldr">SQN LDR.</option>
										<option value="wgcdr"> WG CDR.</option>
										<option value="justice"> JUSTICE</option>
									</select>
							</div>				  
						</div>
										
						<div class="col-md-5">
							<div class="form-group">
								<p class="mg-b-10">First Name</p>
									<input type="text" class="form-control" name="firstname" placeholder="First Name">
							</div>
						</div>
										
						<div class="col-md-5">
							<div class="form-group">
								<p class="mg-b-10">Last Name</p>
								<input type="text" class="form-control" name="lastname" placeholder="Last Name">
							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-md-2">			    
								<div class="form-group">
									<p class="mg-b-10">Spouse</p>
										<select name="spouse_profile" id="spouse_profile" class="form-control">
											<option value="">Select</option>
											<option value="mr">MR.</option>
											<option value="mrs">MRS.</option>
										</select>
								</div>				  
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<p class="mg-b-10">Spouse Details</p>
										<input type="text" class="form-control" name="Spouse-details" placeholder="Spouse Details">
								</div>
							</div>
											
							<div class="col-md-5">
								<div class="form-group">
									<p class="mg-b-10">Date Of Birth</p>
			
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fe fe-calendar lh--9 op-6"></i>
										</div>

										<input class="form-control fc-datepicker bg-white" name="birthdate" id="birthdate" readonly placeholder="MM/DD/YYYY" type="text">
									</div>

								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-12">
									<h6 class="card-title mb-2 mt-2">PAN Details</h6>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<p class="mg-b-10">PAN No</p>
											<input type="text" class="form-control" name="pan_number" placeholder="PAN No">
									</div>
								</div>
								<div class="col-md-3">			    
									<div class="form-group">
										<p class="mg-b-10">Name as per PAN</p>
											<input type="text" class="form-control" name="pan_name" placeholder="Name as per PAN">
									</div>				  
								</div>
								<div class="col-md-3">			    
									<div class="form-group">
										<p class="mg-b-10">Father Name as per PAN</p>
											<input type="text" class="form-control" name="father_name" placeholder="Father Name">
									</div>			  
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<p class="mg-b-10">Birth Date as a PAN</p>
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fe fe-calendar lh--9 op-6"></i>
											</div>

											<input class="form-control fc-datepicker bg-white" name="pan_birthday" id="pan_birthday" readonly placeholder="MM/DD/YYYY" type="text">
										</div>
									</div>			  
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<p class="mg-b-10">Occupation</p>
											<input type="text" class="form-control" name="occupation"placeholder="Occupation">
									</div>
								</div>
								<div class="col-md-6">			    
									<div class="form-group">
										<p class="mg-b-10">Nationality</p>
											<select name="nationality" id="nationality" class="form-control">
												<option value="">Select</option>
												<option value="mr">Indian</option>
												<option value="mrs">Canada</option>
											</select>
									</div>				  
								</div>
							</div>
								<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">Donor Residence Address</h6>
											<p class="mg-b-10">Address</p>
											<textarea class="form-control" placeholder="Residence Address" rows="2" name="resaddress" id="resaddress"></textarea>
										</div>
										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">City</p>
											<select name="city" id="city" class="form-control">
												<option value="">Select</option>
												<option value="Ahmedabad">Ahmedabad</option>
												<option value="Surat">Surat</option>
											</select>
										</div>

										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">State</p>
											<select name="state" id="state" class="form-control">
												<option value="">Select</option>
												<option value="gujarat">Gujarat</option>
												<option value="goa">Goa</option>
											</select>
										</div>

										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">Country</p>
											<select name="country" id="country" class="form-control">
												<option value="">Select</option>
												<option value="india">India</option>
												<option value="usa">USA</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Pincode</p>

											<input type="text" class="form-control mg-t-20" autocomplete="off" name="respin" id="respin">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Phone</p>
											<input type="text" class="form-control mg-t-20" name="phone" autocomplete="off">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Email</p>
											<input type="email" class="form-control mg-t-20" name=email autocomplete="off">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10"><i class="fab fa-whatsapp"></i> WhatsApp No.</p>
											<input type="text" class="form-control mg-t-20" name="whatsapp" autocomplete="off">
										</div>										
									</div>
								</div>
							</div>
							<div class="row mg-t-20 mg-b-20">
								<div class="col-lg-12 col-md-12">
									<a href="javascript:void(0)" class="btn btn-primary enterofficeaddress">Enter Office Address</a>
									<a href="javascript:void(0)" class="btn btn-primary hideenterofficeaddress" style="display: none;">Hide Enter Office Address</a>
								</div>
							</div>
								<div class="row mg-t-20 mg-b-20">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<label class="ckbox">
												<input type="checkbox" id="botharesame"><span class="tx-13">Same as a Office Address</span>
											</label>
										</div>
										
									</div>
								</div>
							</div>

							<div class="row office-address" style="display: none;">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">Donor Office Address</h6>
											<p class="mg-b-10">Address</p>
											<textarea class="form-control" placeholder="Residence Address" rows="2" name="offaddress" id="offaddress"></textarea>
										</div>
										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">City</p>
											<select name="off_city" class="form-control">
												<option value="">Select</option>
												<option value="Ahmedabad">Ahmedabad</option>
												<option value="Surat">Surat</option>
											</select>
										</div>

										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">State</p>
											<select name="off_state" id="off_state" class="form-control">
												<option value="">Select</option>
												<option value="gujarat">Gujarat</option>
												<option value="goa">Goa</option>
											</select>
										</div>

										<div class="col-lg-3 col-md-3">
											<h6 class="card-title mb-2 mt-2">&nbsp;</h6>
											<p class="mg-b-10">Country</p>
											<select name="off_country" class="form-control">
												<option value="">Select</option>
												<option value="india">India</option>
												<option value="usa">USA</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row mg-t-20 office-address" style="display: none;">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Pincode</p>
											<input type="text" class="form-control mg-t-20"  autocomplete="off" name="offpin" id="offpin">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Phone</p>
											<input type="text" class="form-control mg-t-20" name=phone autocomplete="off">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10">Email</p>
											<input type="email" class="form-control mg-t-20" name="email" autocomplete="off">
										</div>

										<div class="col-lg-3 col-md-3">
											<p class="mg-b-10"><i class="fab fa-whatsapp"></i> WhatsApp No.</p>
											<input type="text" class="form-control mg-t-20" name="whatsapp" autocomplete="off">
										</div>										
									</div>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<p class="mg-b-10">Fax</p>
											<input type="text" class="form-control" name="fax" autocomplete="off">
										</div>

										<div class="col-lg-6 col-md-6">
											<p class="mg-b-10">Email To</p>
											<select name="mail_to" id="mail_to" class="form-control">
											<option value="">Select</option>
											<option value="office">Office</option>
											<option value="residence">Residence</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row mg-t-20">
								<div class="col-lg-12 col-md-12">
									<div class="row">
										<div class="col-lg-4 col-md-4">
											<p class="mg-b-10">Enrolled Date</p>
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fe fe-calendar lh--9 op-6"></i>
												</div>

												<input class="form-control fc-datepicker bg-white" name="enroll_date" id="enroll_date" readonly placeholder="MM/DD/YYYY" type="text">
											</div>
										</div>

										<div class="col-lg-4 col-md-4">
											<p class="mg-b-10">Branch</p>
											<select name="branch" id="branch" class="form-control">
												<option value="">Select</option>
												<option value="india">Ahmedabad</option>
												<option value="usa">Surat</option>
											</select>
										</div>

										<div class="col-lg-4 col-md-4">
											<p class="mg-b-10">Preacher</p>
											<select name="preacher" id="preacher" class="form-control">
												<option value="">Select</option>
												<option value="india">KRCD</option>
												<option value="usa">KBCR</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row justify-content-end mb-0 mg-t-20">
								<div class="col-md-12">
									<button class="btn ripple btn-primary pd-x-30 mg-r-5">Submit</button>
								</div>
							</div>



						
				</div>
			</div>
		</div>
		
	</div>
	</div>
					
</template>
<script type="text/javascript">
	 
	 export default {
        mounted(){

        	$("#userprofile").select2();
        	$("#spouse_profile").select2();
			$("#nationality").select2();			
			$("#country").select2();
			$("#mail_to").select2();
			$("#state").select2();
			$("#city").select2();
			$("#off_city").select2();
			$("#off_state").select2();
			$("#off_country").select2();

			$("#branch").select2();
			$("#preacher").select2();

			$("#pan_birthday").datepicker();
			$("#enroll_date").datepicker();
			$("#birthdate").datepicker();

			$(".enterofficeaddress").click(function(){
				$(".office-address").show();
				$(".enterofficeaddress").hide();
				$(".hideenterofficeaddress").show();
			});	

			$(".hideenterofficeaddress").click(function(){


				$(".office-address").hide();
				$(".hideenterofficeaddress").hide();
				$(".enterofficeaddress").show();
				clearoffaddress();
			});	


			$("#botharesame").change(function(){
				if($("#botharesame").prop("checked") == true){
	                $("#offaddress").val($("#resaddress").val());
	            }
	            else if($("#botharesame").prop("checked") == false){
	                clearoffaddress();
	            }
			});

			function clearoffaddress()
			{
				$("#botharesame").prop("checked",false);
				$("#offaddress").val("");
			}

            console.log('Component mounted.')
        }
    }

</script>