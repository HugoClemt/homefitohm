@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main class="">
        <section class="container-fluid mx-auto block-actualite">
            <div class="container-fluid mx-auto">
                <div class="flex justify-center items-end h-screen">
                    <div class="flex space-x-6 text-white w-full">
                        <div class="w-1/2 px-32 pb-10">
                            <h1 class="text-6xl font-bold">Home Fit Ohm<br><span class="normal-case">Actualités</span></h1>
                            <p class="text-xl mt-4">Bernay</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mx-auto mt-16">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="line text-[#689D71] text-6xl font-bold">Dernière actualités</h2>
            </div>
            <div class="container-fluid mx-auto w-3/5 my-8">
                <div>
                    <img src="{{ asset('storage/images/' . $actualites->first()->image_name) }}" class=" flex mx-auto rounded-[32px]">
                    <div>
                        <h3 class="text-6xl font-bold text-[#689D71] mt-4">{{ $actualites->first()->title }}</h3>
                        <p class="text-3xl font-light">{{ $actualites->first()->formatted_date }}</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mx-auto w-3/5">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3  gap-8">
                    @foreach($actualites as $actualite)
                        @if($loop->iteration > 1)
                            <div class=" justify-center">
                                <a href="{{ route('actualite-details', $actualite->id) }}">
                                    <img src="{{ asset('storage/images/' . $actualite->image_name) }}" class="flex mx-auto rounded-[32px]">
                                    <div class="w-full mt-2">
                                        <h3 class="text-4xl font-bold text-[#689D71]">{{ $actualite->title }}</h3>
                                        <p class="text-3xl font-light">{{ $actualite->formatted_date }}</p>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        @include('layouts.banner-contact')
    </main>
</body>
@include('layouts.footer') 