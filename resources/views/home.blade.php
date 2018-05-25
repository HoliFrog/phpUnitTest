@extends('template')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div><a href="{{route('project')}}">Aller voir les projet ICI!!</a></div>
                <div><a href="{{route('projectCreation')}}">Aller créer votre projet ICI!!</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
