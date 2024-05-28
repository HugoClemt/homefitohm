@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main class="bg-white">
        <section class="container-fluid mx-auto block-coach">
            <div class="container-fluid mx-auto">
                <div class="flex justify-center items-end h-screen">
                    <div class="flex space-x-6 text-white w-full">
                        <div class="w-1/2 px-32 pb-10">
                            <h1 class="text-6xl font-bold">Home Fit Ohm<br><span class="normal-case">Nos coachs</span></h1>
                            <p class="text-xl mt-4">Bernay</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mx-auto mt-16">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="line text-[#689D71] text-6xl font-bold">Nos coachs</h2>
            </div>
            @foreach($coachs as $coach)
                <div class="container-fluid mx-auto w-3/4 my-8">
                    <div class="flex space-x-6 bg-[#689D71] text-white rounded-[32px]">
                        <div class="w-full flex items-center {{ $loop->iteration % 2 === 0 ? 'flex-row-reverse' : '' }}">
                            <div class="w-1/4 ">
                                <img src="{{ asset('storage/images/'.$coach->image_name) }}" alt="Présentation" class="w-full h-full object-cover {{ $loop->iteration % 2 === 0 ? 'rounded-r-[32px]' : 'rounded-l-[32px]' }}">
                            </div>
                            <div class="w-3/4">
                                <div class="py-16">
                                    <h3 class="text-6xl font-bold text-center">{{ $coach->prenom }}</h2>
                                    <p class="text-5xl font-bold text-center">{{ $coach->domaine }}</p>
                                    <p class="text-3xl mt-4 px-16">{{ $coach->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
        <section>
            <div class="container-fluid mx-auto w-3/4 mt-10">
                <h2 class="line text-[#689D71] text-6xl font-bold">Nos application</h2>
            </div>
            <div class="container-fluid mx-auto w-3/4 mt-8">
                <div class="flex space-x-16">
                    <div class="w-1/4">
                        <img src="{{ asset('images/mokup_app.png') }}" alt="Présentation" class="w-full object-cover">
                    </div>
                    <div class="w-3/4">
                        <img src="{{ asset('images/logo_app.png') }}" alt="Présentation" class="w-4/5 object-cover items-center">
                        <div class="flex space-x-16 mt-16">
                            <div class="w-1/2 bg-[#E6E6E6] rounded-[32px]">
                                <div class="p-8">
                                    <h3 class="text-5xl font-bold">Planification des cours collectifs</h3>
                                    <p class="text-3xl font-light mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                                </div>
                            </div>
                            <div class="w-1/2 bg-[#E6E6E6] rounded-[32px]">
                                <div class="p-8">
                                    <h3 class="text-5xl font-bold">Exercices</h3>
                                    <p class="text-3xl font-light mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#E6E6E6] rounded-[32px] mt-8">
                            <div class="p-8">
                                <h3 class="text-5xl font-bold">Suivi personnalisé</h3>
                                <p class="text-3xl font-light mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        @include('layouts.banner-contact')
    </main>
</body>
@include('layouts.footer') 