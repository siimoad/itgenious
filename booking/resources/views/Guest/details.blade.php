@extends('layouts.app', ['class' => 'bg-primary'])

@section('content')
    @include('Guest.header')
        
            
<div class="container ">
                <div class="row">
                    <div class="col-md-5">
                        <img class="d-block w-100" src="{{ asset('gretong') }}/images/Microsoft-Certification-Logo.png" alt="First slide">
                    </div>              
                                
                    <div class="col-md-7">
                        <h6>Formation PHP/MySql </h6>
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                                <p> Inscription en cours</p>
                             <div class="short_overview my-5">
                                <p>Microsoft certification  certification professionnelle venant de chez Microsoft indiquant un niveau de maîtrise et de connaissance du sujet abordé. Elle est le résultat positif d'un QCM comprenant de 40 à 80 questions selon les thèmes. Il existe des examens sur différents produits et différentes spécialités comme l'administration réseau, le développement ou l'utilisation d'outils bureautique.  </p>
                            </div>
                                <form class="cart clearfix" method="post">
                                    <a href="#"><button type="button" name="addtocart" value="5" class="btn amado-btn" >Réservez votre place</button></a>
                                </form>

                        </div>
                    </div>
                </div>
            
        </div>
 


  
   

    

@endsection