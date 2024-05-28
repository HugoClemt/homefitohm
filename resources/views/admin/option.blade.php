@vite('resources/css/app.css')
<head>
    <title>Tableau de bord</title>
</head>
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header-admin')
    </header>
    <main class="bg-slate-200">
    <div class="container mt-5">
    <h1>Options</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('optionPost') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="text" class="form-control" id="prix" name="prix" value="{{ old('prix', $option->prix ) }}">
        </div>
        <div class="form-group">
            <label for="phone">Numéro de téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $option->phone ?? '') }}">
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $option->email ?? '') }}">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse postale</label>
            <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $option->adresse ?? '') }}">
        </div>
        <div class="form-group">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville" value="{{ old('ville', $option->ville ?? '') }}">
        </div>
        <div class="form-group">
            <label for="code_postal">Code postal</label>
            <input type="text" class="form-control" id="code_postal" name="code_postal" value="{{ old('code_postal', $option->code_postal ?? '') }}">
        </div>
        <div class="form-group">
            <label for="lundi_horaire">Horaires lundi</label>
            <input type="text" class="form-control" id="lundi_horaire" name="lundi_horaire" value="{{ old('lundi_horaire', $option->lundi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="mardi_horaire">Horaires mardi</label>
            <input type="text" class="form-control" id="mardi_horaire" name="mardi_horaire" value="{{ old('mardi_horaire', $option->mardi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="mercredi_horaire">Horaires mercredi</label>
            <input type="text" class="form-control" id="mercredi_horaire" name="mercredi_horaire" value="{{ old('mercredi_horaire', $option->mercredi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="jeudi_horaire">Horaires jeudi</label>
            <input type="text" class="form-control" id="jeudi_horaire" name="jeudi_horaire" value="{{ old('jeudi_horaire', $option->jeudi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="vendredi_horaire">Horaires vendredi</label>
            <input type="text" class="form-control" id="vendredi_horaire" name="vendredi_horaire" value="{{ old('vendredi_horaire', $option->vendredi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="samedi_horaire">Horaires samedi</label>
            <input type="text" class="form-control" id="samedi_horaire" name="samedi_horaire" value="{{ old('samedi_horaire', $option->samedi_horaire ?? '') }}">
        </div>
        <div class="form-group">
            <label for="dimanche_horaire">Horaires dimanche</label>
            <input type="text" class="form-control" id="dimanche_horaire" name="dimanche_horaire" value="{{ old('dimanche_horaire', $option->dimanche_horaire ?? '') }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
    </main>
</body>
