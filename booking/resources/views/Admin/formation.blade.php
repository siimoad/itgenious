@extends('layouts.app')

@section('content')


<div class="nav-wrapper">
        <button type="button" class="btn btn-primary btn-lg btn-block">Ajouter Formation</button>
    </div>
    <div class="table-responsive">
            <div>
            <table class="table align-items-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">
                            Project
                        </th>
                        <th scope="col">
                                Nombres De Places
                        </th>
                        <th scope="col">
                            Date Debut
                        </th>
                        <th scope="col">
                            Dscription
                        </th>
                        <th scope="col">
                           PDF
                        </th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    
                    <tr>
                        <th scope="row" class="name">
                            <div class="media align-items-center">
                                <span class="mb-0 text-sm">HTML/CSS</span>
                            </div>
                        </th>
                        <td class="font-weight-normal">
                            30 
                        </td>
                        <td >
                            <span class="badge badge-dot mr-4">
                             30/10/2019
                            </span>
                        </td>
                        <td class="w-25    p-2">
                            <div  >
                                  salut
                            </div>
        
                        </td>
                        <td >
                            ici le cours PDF
                        </td>
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
                    <tr>
                            <th scope="row" class="name">
                                <div class="media align-items-center">
                                    <span class="mb-0 text-sm">HTML/CSS</span>
                                </div>
                            </th>
                            <td class="font-weight-normal">
                                30 
                            </td>
                            <td >
                                <span class="badge badge-dot mr-4">
                                 30/10/2019
                                </span>
                            </td>
                            <td class="w-25    p-2">
                                <div  >
                                      salut
                                </div>
            
                            </td>
                            <td >
                                ici le cours PDF
                            </td>
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
                        <tr>
                                <th scope="row" class="name">
                                    <div class="media align-items-center">
                                        <span class="mb-0 text-sm">HTML/CSS</span>
                                    </div>
                                </th>
                                <td class="font-weight-normal">
                                    30 
                                </td>
                                <td >
                                    <span class="badge badge-dot mr-4">
                                     30/10/2019
                                    </span>
                                </td>
                                <td class="w-25    p-2">
                                    <div  >
                                        salut
                                    </div>
                
                                </td>
                                <td >
                                    ici le cours PDF
                                </td>
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
                            <tr>
                                    <th scope="row" class="name">
                                        <div class="media align-items-center">
                                            <span class="mb-0 text-sm">HTML/CSS</span>
                                        </div>
                                    </th>
                                    <td class="font-weight-normal">
                                        30 
                                    </td>
                                    <td >
                                        <span class="badge badge-dot mr-4">
                                         30/10/2019
                                        </span>
                                    </td>
                                    <td class="w-25    p-2">
                                        <div  >
                                              SAlut
                                        </div>
                    
                                    </td>
                                    <td >
                                        ici le cours PDF
                                    </td>
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
                                <tr>
                                        <th scope="row" class="name">
                                            <div class="media align-items-center">
                                                <span class="mb-0  text-sm">HTML/CSS</span>
                                            </div>
                                        </th>
                                        <td style="justify-content:center;">
                                            30 
                                        </td>
                                        <td >
                                            <span class=" mr-4">
                                             30/10/2019
                                            </span>
                                        </td>
                                        <td class="w-25    p-2">
                                            <div  >
                                                  salut 
                                            </div>
                        
                                        </td>
                                        <td >
                                            ici le cours PDF
                                        </td>
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
                    
                  
                    
                </tbody>
            </table>
        </div>
        
        </div>
        
        
        
        

    @endsection