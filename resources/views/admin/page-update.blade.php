@vite('resources/css/app.css')

@include('layouts.head-admin')
<body>
    <header class="bg-[#FFFFFF] text-white">
        @include('layouts.header-admin')
    </header>
    <main>
        <div class="container mx-auto">
            <div class="pt-6">
                <h1 class="text-2xl font-bold text-center pt-3">{{ $page->title }}</h1>
                <p class="text-center">Vous pouvez modifier l'image de bannière de la page ici.</p>
            </div>
            <div class="flex justify-center pt-6">
                <div class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2">
                    <div class="flex justify-center">
                        <?php if ($page->image_url) { ?>
                            <img src="{{ asset('storage/images/' . $page->image_url) }}" alt="Bannière de la page" class="w-full h-auto">
                        <?php } else { ?>
                            <p class="text-center">Pas d'image de bannière</p>
                        <?php } ?>
                    </div>
                    <div class="mt-6 text-center">
                        <form action="{{ route('updatePicture') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <input type="hidden" name="page_id" value="{{ $page->id }}">
                            <input type="file" name="image">
                            <button type="submit">Télécharger</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>            
    </main>
</body>