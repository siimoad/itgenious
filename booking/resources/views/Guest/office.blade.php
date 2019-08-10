@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
	@include('Guest.header')
	
	<div class="container">
		<div class="arriv">
			<div class="row">	
				@foreach($annonces as $annonce)
					<div class="col-md-6">
						<img src="{{asset("storage/annonce_photo/$annonce->annonce_photo")}}" class="img-fluid" alt="img-responsive">
						<div class=" arriv-info">
							<div class=" crt-btn">
								<a href="{{ route('details', ['id' => $annonce->id]) }}">AFFICHER</a>
							</div>
						</div>
					</div>
								@endforeach

			</div>
		</div>
</div>
</div>

<footer >
	@include('Guest.footer')
</footer>

@endsection


 

