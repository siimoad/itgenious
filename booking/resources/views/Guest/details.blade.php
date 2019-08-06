@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
    
<div class="container ">
        <h1 class="text-center">Formation MICROSOFT</h1> 
            <div class="my-6">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{ asset('gretong') }}/images/2-MICROSOFT-MCSA2016.png" alt="First slide">
                    </div>              
                    
                    <div class="col-md-7">
                        
                          
                                <h4 class="text-success"> Inscription en cours</h4>
                             <div class="short_overview my-5">
                                <p>Microsoft certification  certification professionnelle venant de chez Microsoft indiquant un niveau de maîtrise et de connaissance du sujet abordé. Elle est le résultat positif d'un QCM comprenant de 40 à 80 questions selon les thèmes. Il existe des examens sur différents produits et différentes spécialités comme l'administration réseau, le développement ou l'utilisation d'outils bureautique.  </p>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <form class="cart clearfix" method="post">
                                    <a href="#"><button type="button" name="addtocart" value="5" class="btn amado-btn" >Réservez votre place</button></a>
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