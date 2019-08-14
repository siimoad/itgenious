@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container">
<div class="arriv">
	<div class="container">
		<div class="row arriv-top">	
			<div class="col-md-6 arriv-left">
                <a href="{{route ('book')}}"><img src="{{ asset('gretong') }}/images/azure.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-6  arriv-right">
                <a href="#"><img src="{{ asset('gretong') }}/images/exchange.png" class="img-fluid" alt="img-responsive"></a>
			
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-bottm ">
			<div class="col-md-8  arriv-left1">
                <a href="#"><img src="{{ asset('gretong') }}/images/sharepoint.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-4 arriv-right1">
                <a href="#"><img src="{{ asset('gretong') }}/images/sql.png" class="img-fluid" alt="img-responsive"></a>
				
			<div class="clearfix"> </div>
		</div>
		<div class="row arriv-las">
			<div class="col-md-4 arriv-left2 ">
                <a href="#"><img src="{{ asset('gretong') }}/images/asp.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-4  arriv-middle">
                <a href="#"><img src="{{ asset('gretong') }}/images/system-center.png" class="img-fluid" alt="img-responsive"></a>
				
			</div>
			<div class="col-md-4  arriv-right2">
                <a href="#"><img src="{{ asset('gretong') }}/images/server.png" class="img-fluid"  alt="img-responsive"></a>
				
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


 

