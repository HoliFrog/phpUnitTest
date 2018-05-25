
@extends('template')


@section('titre')
    <h1>Liste des Projets</h1>

@endsection

@section('contenu')

    <div class="container">
        @foreach($projects as $project)
            <div class="row">
                <div class="col-lg-offset-2 col-lg-7"></div>
                <h2>{{$project->projectName}}</h2>
                <a href="{{route('projectDetails',[$project->id])}}"><img src="image/australie.png" alt="photo australie"></a>
                <p>{{$project->content}}</p>
                <a href='{{route('projectDetails',[$project->id])}}'><button id="Contribuer"
                                                                         name="Contribuer" class="btn btn-info">VOIR LE PROJET</button></a>
                <a href='{{route('projectEdition',[$project->id])}}'><button id="EditP"
                                                                         name="EditP" class="btn btn-info">Editer LE PROJET</button></a>
            </div>
    @endforeach
    </div>
@endsection