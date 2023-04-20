<div class="col-xl-3 col-lg-4 m-b30">
	<div class="sticky-top">
		<div class="candidate-info">
			<div class="candidate-detail text-center">
				<div class="canditate-des">
					<a href="#">
					@if(!empty(Auth::user()->image))
					<img alt="" src="{!! asset(Auth::user()->image) !!}" >
					@else
					<img alt="" src="{!! asset('storage/uploads/users/users.jpg') !!}" >	
					@endif
					</a>
					<form method="post" action="{{ route('site.profile.image')}}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">     
						<div class="upload-link" title="update" data-toggle="tooltip"
							data-placement="right">
							<input type="file" name="image" class="update-flie" onchange='this.form.submit()'>
							<i class="fa fa-camera-retro"></i>
							<input type="submit" value="Submit">
						</div>
					</form>
				</div>
				<div class="candidate-title">
					<div class="">
						<h4 class="m-b5"><a href="#">{{Auth::user()->name }}</a>
						</h4>
						<p class="m-b0"><a href="#">{{Auth::user()->title }}</a>
						</p>
					</div>
				</div>
			</div>
			<ul>	
				<li><a href="{{ route('site.profile.index') }}" <?php if(request()->segment(1)=='profile')echo 'class="active"'; ?>><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a></li>
				<li><a href="https://manticoresoft.com/rn-dev/azetacare/document/html/PatientAdmissionCare.html" target="blank"><i class="fa fa-address-book"></i><span>Patient Admission Care</span></a></li>
				<li><a href="https://manticoresoft.com/rn-dev/azetacare/document/html/FormPatientAdmission.html" target="blank"> <i class="fa fa-plus-square"></i> <span>Patient Admission Form</span></a></li>
				<li><a href="https://manticoresoft.com/rn-dev/azetacare/document/html/personnel_file_sections.html" target="blank"> <i class="fa fa-snowflake"></i> <span>Personnel File Sections</span></a></li>
				
				<li><a href="{{ route('site.my_job.index') }}" <?php if(request()->segment(1)=='my-job')echo 'class="active"'; ?>><i class="fa fa-file" aria-hidden="true"></i><span>My Jobs</span></a></li>
				<li><a href="{{ route('site.medical_record.index') }}" <?php if(request()->segment(1)=='medical-record')echo 'class="active"'; ?>><i class="fa fa-heart"></i><span>My Medical Records</span></a></li>
				<li><a href="{{ route('site.my_client.index') }}" <?php if(request()->segment(1)=='my-client')echo 'class="active"'; ?>><i class="fa fa-handshake"></i><span>My Client's</span></a></li>
				<li><a href="{{ route('site.my_task.index') }}" <?php if(request()->segment(1)=='my-task')echo 'class="active"'; ?>><i class="fa fa-handshake"></i><span>My Task</span></a></li>
				<li><a href="{{ route('site.attendance.index') }}" <?php if(request()->segment(1)=='attendance')echo 'class="active"'; ?>><i class="fa fa-handshake"></i><span>My Attendance</span></a></li>
				<li><a href="{{ route('site.my_billing.index') }}" <?php if(request()->segment(1)=='my-billing')echo 'class="active"'; ?>><i class="fa fa-handshake"></i><span>My Billing</span></a></li>
				<li><a href="#"><i class="fa fa-briefcase" aria-hidden="true" <?php if(request()->segment(1)=='profile')echo 'class="active"'; ?>></i><span>My Training</span></a></li>
				<li><a href="{{ route('site.profile.change_password') }}" <?php if(request()->segment(1)=='change-password')echo 'class="active"'; ?>><i class="fa fa-key" aria-hidden="true"></i><span>Change Password</span></a></li>
				<li><a href="{{ url('/logout') }}" <?php if(request()->segment(1)=='logout')echo 'class="active"'; ?>><i class="fa fa-sign-out" aria-hidden="true"></i><span>Log Out</span></a></li>
			</ul>
		</div>
	</div>
</div>