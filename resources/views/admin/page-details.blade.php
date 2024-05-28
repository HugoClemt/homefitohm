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
                        <img src="{{ asset('storage/' . $page->banner) }}" alt="Bannière de la page" class="w-full h-auto">
                    </div>
                    <div class="flex justify-center pt-6">
                        <a href="#" class="btn bg-[#689D71] text-button p-2 rounded-full">Modifier la bannière</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>