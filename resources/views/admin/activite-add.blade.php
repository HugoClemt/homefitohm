@vite('resources/css/app.css')
<head>
  <title>Tableau de bord</title>
</head>
<body>
  <header class="bg-slate-500 text-white">
    @include('layouts.header-admin')
  </header>
  <main>
    <div class="container mx-auto pt-6 flex justify-center items-center">
      <div class="col-12 w-full max-w-md">  <h1 class="text-2xl font-bold text-center pt-3">Ajouter un activite</h1>
        <form action="{{ route('ajouterActivitePost') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control border border-gray-300" id="title" name="title" required>
          </div>
          <div class="mb-3">
            <label for="image_name" class="form-label">Picture</label>
            <input type="file" class="form-control border border-gray-300" id="image_name" name="image_name" accept="image/*">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label align-top">Contenu</label>
            <textarea class="form-control border border-gray-300" id="content" name="content" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
      </div>
    </div>
  </main>
</body>
