@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
<div class="container">
	<div class="header">
		<ul class="megamenu skyblue">
			
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">MICROSOFT</a></li>
			<li><a class="color4" href="#">CISCO</a></li>
			<li><a class="color5" href="#">VMWARE</a></li>
			<li><a class="color6" href="#">SNIA</a></li>			
			<li><a class="color7" href="#">ORACLE</a></li>
			<li><a class="color8" href="#">LINUX</a></li>
			<li><a class="color9" href="#">JAVA</a></li>
			<li><a class="color9" href="#">FORTINET</a></li>
         </ul> 
    </div>
</div>
	<div class="container">
<div class="arriv">
	<div class="container">
		<div class="row arriv-top">	
			<div class="col-md-6 arriv-left">
				<img src="{{ asset('gretong') }}/images/Microsoft-Certification-Logo.png" class="img-fluid" alt="img-responsive">
				<div class=" arriv-info">
					<div class=" crt-btn">
						<a href="{{ route('details') }}">TAKE A LOOK</a>
					</div>
				</div>
			</div>
			<div class="col-md-6  arriv-right">
			<img src="{{ asset('gretong') }}/images/htmljscss.png" class="img-fluid" alt="img-responsive">
			<div class=" arriv-info">
					<div class=" crt-btn ">
						<a href="{{ route('details') }}">TAKE A LOOK</a>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-bottm ">
			<div class="col-md-8  arriv-left1">
				<img src="{{ asset('gretong') }}/images/oracle.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info2">
						<div class="crt-btn">
							<a href="{{ route('details') }}">TAKE A LOOK</a>
						</div>
					</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="{{ asset('gretong') }}/images/linux.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info2 ">
						<div class="crt-btn ">
							<a href="{{ route('details') }}">TAKE A LOOK</a>
						</div>
					</div>
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-las">
			<div class="col-md-4 arriv-left2 ">
				<img src="{{ asset('gretong') }}/images/fortinet-inner.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info3">
						
						<div class="crt-btn ">
							<a href="{{ route('details') }}">TAKE A LOOK</a>
						</div>
				</div>
			</div>
			<div class="col-md-4  arriv-middle">
				<img src="{{ asset('gretong') }}/images/java.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info3">
						<div class="crt-btn">
							<a href="{{ route('details') }}">TAKE A LOOK</a>
						</div>
				</div>
			</div>
			<div class="col-md-4  arriv-right2">
				<img src="{{ asset('gretong') }}/images/cisco.png" class="img-fluid"  alt="img-responsive">
				<div class="arriv-info3 ">
						<div class="crt-btn">
							<a href="{{ route('details') }}">TAKE A LOOK</a>
						</div>
				</div>
			</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

       

@endsection
