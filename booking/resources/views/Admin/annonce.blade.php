@extends('layouts.app')

@section('content')
    @include('Client.header')   

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col-xl-12">
                    <a href="#" class="mb-3 btn btn-secondary btn-lg  btn-block active" role="button" aria-pressed="true">Ajouter Annonce</a>


    <div class="table-responsive">
        <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Formation</th>
                        <th scope="col">Formation PDF</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Photo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($annonces as $annonce)
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm">{{$annonce->formation->titre}}</span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                                <span class="mb-0 text-sm">{{$annonce->formation->formation_pdf}}</span>
                        </td>

                        <td class="w-25    p-2">
                            <div>
                                  {{$annonce->prix}}
                            </div>
        
                        </td>
                        <td > {{$annonce->annonce_photo}}</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="#">Ajouter Etudiant</a>
                                    <a class="dropdown-item" href="#">Modifier Formation</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse
                   
                            
                               
                    
                  
                    
                </tbody>
            </table>
        </div>
        
    </div>
            </div>

        
            </div>
</div>
        

    @endsection