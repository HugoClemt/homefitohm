@vite('resources/css/app.css')

@include('layouts.head-admin')
<body>
  <header class="bg-[#FFFFFF] text-white">
    @include('layouts.header-admin')
  </header>
  <main>
    <div class="container mx-auto">
      <div class="pt-6">
        <h1 class="text-2xl font-bold text-center pt-3">{{ $activite->title }}</h1>
      </div>
      <div class="flex justify-center pt-6">
        <div class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2">  <div class="flex justify-center">  <?php if ($activite->image_name) { ?>
              <img src="{{ asset('storage/images/' . $activite->image_name) }}" alt="Bannière de la page" class="w-full h-auto">
            <?php } else { ?>
              <p class="text-center">Pas d'image de bannière</p>
            <?php } ?>
          </div>
          <div class="mt-6 text-center">  <form action="{{ route('updateActivite', ['id' => $activite->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <input type="hidden" name="coach_id" value="{{ $activite->id }}">
              <div class="mb-3">  <label for="title">Titre</label>
                <input type="text" name="title" value="{{ $activite->title }}" class="form-control border border-gray-300">
              </div>
              <div class="mb-3">  <label for="content">Contenu</label>
                <textarea name="content" class="form-control border border-gray-300" rows="10">{{ $activite->content }}</textarea>
              </div>
              <div class="mb-3">  <input type="file" name="image_name" class="form-control border border-gray-300">
              </div>
              <button type="submit">Enregistrer</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
