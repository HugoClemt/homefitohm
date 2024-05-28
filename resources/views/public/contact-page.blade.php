@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main>
        <section class="container-fluid mx-auto block-contact">
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
        <section class="container-fluid mx-auto mt-16 mb-10">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="line text-[#689D71] text-6xl font-bold">Où nous trouver ?</h2>
            </div>
            <div class="container-fluid mx-auto w-3/4 mt-8">
                <div class="flex space-x-6">
                    <div class="w-2/3">
                        <img src="{{ asset('images/homefitohm.png') }}" alt="Présentation" class="w-full object-cover rounded-[32px]">
                    </div>
                    <div class="w-1/3">
                        <div class="text-5xl font-bold">
                            <h3>Home fit Ohm</h3>
                            <p>{{ $option->ville }} {{ $option->code_postal }}</p>
                        </div>
                        <div class="text-3xl font-bold mt-10">
                            <p>{{ $option->adresse }}</p>
                            <p>France</p>
                        </div>
                        <div class="text-2xl font-light mt-10">
                            <p>{{ $option->email }}</p>
                            <p>{{ $option->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
@include('layouts.footer') 