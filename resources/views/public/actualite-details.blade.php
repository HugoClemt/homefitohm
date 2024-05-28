@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main>
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
                <h2 class="line text-[#689D71] text-6xl font-bold">{{ $actualite->title }}</h2>
            </div>
            <div class="container-fluid mx-auto w-3/4 my-8">
                <div class="flex space-x-6">
                    <div class="w-1/2">
                        <img src="{{ asset('storage/images/' . $actualite->image_name) }}" class=" flex mx-auto rounded-[32px]">
                    </div>
                    <div class="w-1/2">
                        <p class="text-6xl font-bold">{{ $actualite->title }}</p>
                        <p class="text-3xl text-[#689D71] font-light">{{ $actualite->formatted_date }}</p>
                        <p class="text-3xl font-light">{{ $actualite->content }}</p>
                    </div>
                </div>
        </section>
        @include('layouts.actualite')
        @include('layouts.banner-contact')
    </main>
</body>
@include('layouts.footer') 