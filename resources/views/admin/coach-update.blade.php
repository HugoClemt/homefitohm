@vite('resources/css/app.css')

@include('layouts.head-admin')
<body>
  <header class="bg-[#FFFFFF] text-white">
    @include('layouts.header-admin')
  </header>
  <main>
    <div class="container mx-auto">
      <div class="pt-6">
        <h1 class="text-2xl font-bold text-center pt-3">{{ $coach->prenom }}</h1>
      </div>
      <div class="flex justify-center pt-6">
        <div class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2">  <div class="flex justify-center">  <?php if ($coach->image_name) { ?>
              <img src="{{ asset('storage/images/' . $coach->image_name) }}" alt="Bannière de la page" class="w-full h-auto">
            <?php } else { ?>
              <p class="text-center">Pas d'image de bannière</p>
            <?php } ?>
          </div>
          <div class="mt-6 text-center">
            <form action="{{ route('updateCoach', ['id' => $coach->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" name="coach_id" value="{{ $coach->id }}">
              <div class="mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" value="{{ $coach->prenom }}" class="form-control border border-gray-300">
              </div>
              <div class="mb-3">
                <label for="domaine">Domaine</label>
                <input type="text" name="domaine" value="{{ $coach->domaine }}" class="form-control border border-gray-300">
              </div>
              <div class="mb-3">
                <label for="description">Contenu</label>
                <textarea name="description" class="form-control border border-gray-300" rows="10">{{ $coach->description }}</textarea>
              </div>
              <div class="mb-3">
                <input type="file" name="image" class="form-control border border-gray-300">
              </div>
              <button type="submit">Télécharger</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
