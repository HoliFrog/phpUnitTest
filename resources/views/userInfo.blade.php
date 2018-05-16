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




                            <!-- Form Name -->
                            <legend>Voici votre profil</legend>

                            <!-- Text input-->
                            <div class="col-md-4">Prénom
                                <h1 id="firstNameInput" name="firstName" value="" class="form-control input-md"
                                    type="text">{{$user->firstName}}</h1>
                            </div>

                            <!-- Text input-->
                            <div class="col-md-4">Nom
                                <h1 id="nameInput" name="name" value="" class="form-control input-md"
                                    type="text">{{$user->name}}</h1>
                            </div>

                            <!-- Text input-->
                            <div class="col-md-4">Email

                                <h1 id="email" name="email" value="" class="form-control input-md"
                                    type="email">{{$user->email}}</h1>
                            </div>

                            <!-- Password input-->

                            <div>
                                <a href="{{ route('user') }}" id="singlebutton" name="singlebutton"
                                        class="btn btn-primary">
                                    Changez-le!
                                </a>
                            </div>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
