@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main class="">
        <section class="container-fluid mx-auto block-activite">
            <div class="container-fluid mx-auto">
                <div class="flex justify-center items-end h-screen">
                    <div class="flex space-x-6 text-white w-full">
                        <div class="w-1/2 px-32 pb-10">
                            <h1 class="text-6xl font-bold">Home Fit Ohm<br><span class="normal-case">Activités</span></h1>
                            <p class="text-xl mt-4">Bernay</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mx-auto mt-16">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="line text-[#689D71] text-6xl font-bold">Nos activités</h2>
            </div>
            @foreach($activites as $activite)
                <div class="container-fluid mx-auto w-3/4 my-8">
                    <div class="flex space-x-16 text-white rounded-[32px]">
                        <div class="w-full flex gap-8 items-center {{ $loop->iteration % 2 === 0 ? 'flex-row-reverse' : '' }}">
                            <div class="w-2/3 relative">
                                <img src="{{ asset('storage/images/'.$activite->image_name) }}" alt="Présentation" class="w-full h-full object-cover rounded-[32px]">
                                <p class="absolute top-8 left-8 text-4xl font-bold">{{ $activite->title }}</p>
                            </div>
                            <div class="w-1/3 bg-[#689D71] bg-activite h-full rounded-[32px]">
                                <div class="py-16 px-7">
                                    <h3 class="text-4xl font-bold opacity-100 mb-8">{{ $activite->title }}</h3>
                                    <p class="text-3xl font-light opacity-100">{{ $activite->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        @include('layouts.banner-contact')
    </main>
</body>
@include('layouts.footer') 