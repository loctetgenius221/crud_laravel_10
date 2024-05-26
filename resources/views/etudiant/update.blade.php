<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1 class="text-center">MODIFIER UN ÉTUDIANT</h1>
                <hr>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>

                <form action="/update/traitement" method="post" class="form-group">
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">

                    <div class="form-group">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudiants->nom }}">
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $etudiants->prenom }}">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="classe">Classe</label>
                        <input type="text" class="form-control" id="classe" name="classe" value="{{ $etudiants->classe }}">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Modifier un étudiant</button>
                    <br><br>
                    <a href="/etudiant" >Revenir à la liste des étudiants</a>

                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
