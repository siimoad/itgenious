@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        <h1 class="text-center">{{$annonce->formation->titre}}</h1> 
            <div class="my-6">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{asset("storage/annonce_photo2/$annonce->annonce_photo2")}}" alt="">
                    </div>              
                    
                    <div class="col-md-7">
                        
                          
                                <h4 class="text-success"> Inscription en cours</h4>
                             <div class="short_overview my-4">
                             <h5>{!! nl2br($annonce->formation->description) !!}</h5>
                             <br>
                             <p> <span class="text-danger">Pour votre information : </span>
                                {!! nl2br($annonce->formation->infos) !!}
                                 </p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <form class="cart clearfix" method="post">
                                    <a href="{{route ('reserver')}}" ><button type="button" name="addtocart" value="5" class="btn amado-btn" data-toggle="modal" data-target="#reserverModal" >Réservez votre place</button></a>
                                </form>
                                </div>

                                
                                <div class="col-md-4">
                                        <form class="cart clearfix" method="post">
                                                <a href="#"><button type="button" name="addtocart" value="5" class="btn amado-btn" >Brochure</button></a>
                                            </form>
                                </div>
                            </div>


                        </div>
                    </div>
            
                </div>
                
                @include('Guest.footer')
        </div>

        
 


  
   

    

@endsection