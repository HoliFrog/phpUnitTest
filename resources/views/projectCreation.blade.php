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
                        <form id="logout-form" action="{{ route('storeProject') }}" method="POST">
                            @csrf

                            <fieldset>

                                <!-- Form Name -->
                                <legend>Créer votre Projet</legend>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="firstNameInput">Nom du Projet</label>
                                    <div class="col-md-4">
                                        <input id="firstNameInput" name="projectName" value="" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Détails</label>
                                    <div class="col-md-12">
                                    <textarea id="nameInput" name="projectDetail"  class="form-control input-md" type="textarea">
                                    </textarea>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">Auteur du Projet</label>
                                    <input id="email" name="author" value="{{$user->name}}" class="form-control input-md" type="text">
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