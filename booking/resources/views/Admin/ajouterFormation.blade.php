@extends('layouts.app', ['title' => __('Ajouter Formation')])

@section('content')
    @include('Client.header')   

    <div class="container-fluid mt--7">
        <div class="row">

            <div class="col-xl-12 order-xl-1">
                <div class="card shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">{{ __('Ajouter Formation') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" action="{{route('formation.add')}}" autocomplete="off" enctype="multipart/form-data">
                          @csrf

                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col form-group{{ $errors->has('titre') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-titre">{{ __('Titre') }}</label>
                                        <input type="text" name="titre" id="input-titre" class="form-control form-control-alternative{{ $errors->has('titre') ? ' is-invalid' : '' }}" placeholder="{{ __('Titre') }}" value="{{ old('titre') }}" required autofocus>

                                        @if ($errors->has('titre'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('titre') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                     <div class="col form-group{{ $errors->has('theme') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-theme">{{ __('Theme') }}</label>
                                        <input type="text" name="theme" id="input-theme" class="form-control form-control-alternative{{ $errors->has('theme') ? ' is-invalid' : '' }}" placeholder="{{ __('Theme') }}" value="{{ old('theme') }}" required autofocus>
                                        @if ($errors->has('theme'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('theme') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-description">{{ __('Description') }}</label>
                                        <textarea  name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description') }}" rows="5" required autofocus></textarea>

                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                </div>
                                <div class="row">
                                <div class="col form-group{{ $errors->has('formation_pdf') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-formation_pdf">{{ __('PDF') }}</label>
                                    <input type="file" name="formation_pdf" id="input-formtation_pdf" class="form-control form-control-alternative{{ $errors->has('formation_pdf') ? ' is-invalid' : '' }}" placeholder="{{ __('Formation PDF') }}" value="{{ old('formation_pdf') }}" required>

                                    @if ($errors->has('formation_pdf'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('formation_pdf') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('Guest.footer')
    </div>
@endsection