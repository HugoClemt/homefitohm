@vite('resources/css/app.css')
<head>
    <title>Tableau de bord</title>
</head>
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header-admin')
    </header>
        <div class="row pt-6">
            <div class="col-12">
                <h1 class="text-2xl font-bold text-center pt-3">Ajouter une page</h1>

                <form action="{{ route('ajouterPagePost') }}" method="POST">
                    @csrf 
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="image_url" class="form-label">Url</label>
                        <input type="text" class="form-control" id="image_url" name="image_url">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Contenu</label>
                        <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
