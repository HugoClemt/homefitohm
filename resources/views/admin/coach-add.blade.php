@vite('resources/css/app.css')
<head>
  <title>Tableau de bord</title>
</head>
<body>
  <header class="bg-slate-500 text-white">
    @include('layouts.header-admin')
  </header>
  <main>
    <div class="container mx-auto pt-6 flex justify-center items-center">  <div class="col-12 w-full max-w-md">  <h1 class="text-2xl font-bold text-center pt-3">Ajouter un coach</h1>
        <form action="{{ route('ajouterCoachPost') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control border border-gray-300" id="prenom" name="prenom" required>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control border border-gray-300" id="image" name="image" accept="image/*">
          </div>
          <div class="mb-3">
            <label for="domaine" class="form-label">Domaine</label>  <textarea class="form-control border border-gray-300" id="domaine" name="domaine" rows="10"></textarea>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control border border-gray-300" id="description" name="description" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </main>
</body>
