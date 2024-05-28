@vite('resources/css/app.css')
<head>
  <title>Tableau de bord</title>
</head>
<body>
  <header class="bg-slate-500 text-white">
    @include('layouts.header-admin')
  </header>
  <main>
    <div class="container mx-auto pt-6 flex justify-center items-center">  <div class="col-12 w-full max-w-md">  <h1 class="text-2xl font-bold text-center pt-3">Ajouter une actualité</h1>
      <form action="{{ route('ajouterActualitePost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Titre</label>
          <input type="text" class="form-control border border-gray-300" id="title" name="title" required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control border border-gray-300" id="image" name="image" accept="image/*">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Contenu</label>
          <textarea class="form-control border border-gray-300" id="content" name="content" rows="10"></textarea>
        </div>
        <div class="mb-3">
          <label for="date" class="form-label">Date (YYYY-MM-DD)</label>
          <input type="date" class="form-control border border-gray-300" id="date" name="date" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>
    </div>
  </main>
</body>
