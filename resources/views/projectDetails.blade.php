@extends('template')


@section('titre')
    <div>Voici le projet :</div>
    <h1><strong>{{$project->projectName}}</strong></h1>

@endsection

@section('image')
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <img src="{{$project->image}}"width="500" height="300"alt="photo test"></a>
            </div>
            <div class="col-lg-4">
                <h2>Contribuer au Projet</h2>
                <a href="/pagedon"><button id="Contribuer au Don" name="Page Don"
                                          class="btn btn-info">FAIRE UN DON</button></a>
            </div>
        </div>
    </div>


@endsection

@section('contenu')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-8">
                <p><strong>{{$project->projectDetail}}</strong></p>
            </div>



            @endsection

            @section('image2')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12"></div>
                        <img src="{{$project->image}}"width="500" height="300"alt="photo test"></a>
                    </div>
                </div>
            @endsection

            @section('contenu2')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12"></div>
                        <h3><strong>A quoi va servir le financement ?</strong></h3><br>
                        <p>Pour ce qui est du financement, pas d'amalgame, nous avons patiemment mis de côté l'argent qu'il nous fallait pour notre voyage <br>
                            (billets d'avion, hébergements, déplacements, nourriture, matériel, visas, vaccins, bières...).<br>
                            Cependant, ce voyage représente un coût plus important que prévu,
                            et nécessite des dépenses primordiales telles que :<br>

                            <em>- l'accès à des sites spécifiques commes des parcs nationaux, ou des lieux insolites et exceptionnels.<br>

                                - le recours aux services de guides locaux, pour aller au plus près de notre sujet.<br>

                                - le financement de structures locales par l'écovolontariat par exemple.<br>

                                - l'achat de matériel de création sur place au fur et à mesure du voyage.<br>

                                - les frais postaux générés par l'envoi de nos productions à la maison pour voyager léger</em></p>
                    </div>
                </div>
        </div>
    </div>
@endsection