@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
<div class="container">
	<div class="header">
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a></li>
			<li><a class="color4" href="#">TUXEDO</a></li>
			<li><a class="color5" href="#">SWEATER</a></li>
			<li><a class="color6" href="#">SHOES</a></li>			
			<li><a class="color7" href="#">GLASSES</a></li>
			<li><a class="color8" href="#">T-SHIRT</a></li>
			<li><a class="color9" href="#">WATCHES</a></li>
         </ul> 
    </div>
</div>
<div class="arriv">
	<div class="container">
		<div class="arriv-top">	
			<div class="col-md-6 arriv-left">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/Microsoft-Certification-Logo.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-6 arriv-right">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/htmljscss.png" class="img-responsive" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/oracle.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-right1">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/linux.png" class="img-responsive" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/fortinet-inner.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-middle">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/java.png" class="img-responsive" alt=""></a>
			</div>
			<div class="col-md-4 arriv-right2">
				<a href="details.html"><img src="{{ asset('gretong') }}/images/cisco.png" class="img-responsive" alt=""></a>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

       

@endsection
