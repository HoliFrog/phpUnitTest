@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form id="logout-form" action="{{ route('update') }}" method="POST">
                                {{ method_field('PUT') }}
                                @csrf

                                <fieldset>

                                    <!-- Form Name -->
                                    <legend>Editer votre profil</legend>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="firstNameInput">Prénom</label>
                                        <div class="col-md-4">
                                            <input id="firstNameInput" name="firstName" value="{{$user->firstName}}" class="form-control input-md" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Nom</label>
                                        <div class="col-md-4">
                                            <input id="nameInput" name="name" value="{{$user->name}}" class="form-control input-md" type="text">
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="email">Votre Courriel</label>
                                        <input id="email" name="email" value="{{$user->email}}" class="form-control input-md" type="email">
                                        <div class="col-md-4">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="singlebutton"></label>
                                        <div class="col-md-4">
                                            <button type="submit" id="singlebutton" name="singlebutton" class="btn btn-primary">Enregistrez!</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection