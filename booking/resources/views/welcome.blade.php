@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container">
<div class="arriv">
	<div class="container">
		<div class="row arriv-top">	
			<div class="col-md-6 arriv-left">
				<img src="{{ asset('gretong') }}/images/mcp.png" class="img-fluid" alt="img-responsive">
				<div class=" arriv-info">
					<div class=" crt-btn">
						<a href="{{ route('details') }}">AFFICHER</a>
					</div>
				</div>
			</div>
			<div class="col-md-6  arriv-right">
			<img src="{{ asset('gretong') }}/images/cisco.png" class="img-fluid" alt="img-responsive">
			<div class=" arriv-info">
					<div class=" crt-btn ">
						<a href="{{ route('details') }}">AFFICHER</a>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-bottm ">
			<div class="col-md-8  arriv-left1">
				<img src="{{ asset('gretong') }}/images/vmware.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info">
						<div class="crt-btn">
							<a href="{{ route('details') }}">AFFICHER</a>
						</div>
					</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="{{ asset('gretong') }}/images/fortinet-inner.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info ">
						<div class="crt-btn ">
							<a href="{{ route('details') }}">AFFICHER</a>
						</div>
					</div>
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-las">
			<div class="col-md-4 arriv-left2 ">
				<img src="{{ asset('gretong') }}/images/linux.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info">
						
						<div class="crt-btn ">
							<a href="{{ route('details') }}">AFFICHER</a>
						</div>
				</div>
			</div>
			<div class="col-md-4  arriv-middle">
				<img src="{{ asset('gretong') }}/images/java.png" class="img-fluid" alt="img-responsive">
				<div class="arriv-info">
						<div class="crt-btn">
							<a href="{{ route('details') }}">AFFICHER</a>
						</div>
				</div>
			</div>
			<div class="col-md-4  arriv-right2">
				<img src="{{ asset('gretong') }}/images/oracle.png" class="img-fluid"  alt="img-responsive">
				<div class="arriv-info">
						<div class="crt-btn">
							<a href="{{ route('details') }}">AFFICHER</a>
						</div>
				</div>
			</div>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<footer >
	@include('Guest.footer')
</footer>

@endsection


 

