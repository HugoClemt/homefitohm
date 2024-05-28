@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main class="bg-white">
        <section class="container-fluid mx-auto block-presentation">
            <div class="container-fluid mx-auto">
                <div class="flex justify-center items-end h-screen">
                    <div class="flex space-x-6 text-white w-full">
                        <div class="w-1/2 px-32 pb-10">
                            <h1 class="text-6xl font-bold">Home Fit Ohm<br><span class="normal-case">Présentation</span></h1>
                            <p class="text-xl mt-4">Bernay</p>
                        </div>
                    </div>
                </div>
        </section>
        <section class="container-fluid mx-auto mt-16">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="text-[#689D71] text-6xl font-bold">Qui sommes-nous ?</h2>
                <div class="flex space-x-6 mt-8">
                    <div class="w-1/3">
                        <img src="{{ asset('images/ingrid_presentation.png') }}" alt="Présentation" class="w-full h-full object-cover rounded-3xl">
                    </div>
                    <div class="w-1/2">
                        <h3 class="text-6xl font-bold">Ingrid Fouquet</h3>
                        <p class="text-5xl font-bold">Directrice d'Home fit Ohm</p>
                        <p class="text-xl mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue feugiat elit, et ornare lorem bibendum non. Vivamus convallis fermentum turpis, at porttitor neque feugiat ornare. Fusce congue quis dolor eu finibus. Aenean quis velit sollicitudin, maximus velit id, porta dolor. Suspendisse nec interdum felis. Aliquam eget dapibus ligula, eu molestie turpis. Fusce sit amet interdum libero. Suspendisse potenti. Praesent laoreet, ex sit amet consequat tristique, eros lorem tristique metus, eu porttitor velit dolor in massa. Nam faucibus mauris blandit urna varius molestie. Nam porttitor leo a efficitur sagittis. Nullam pellentesque est non augue posuere, a pulvinar mi porttitor. Curabitur egestas elementum nunc. Proin ut nisi non risus maximus eleifend. Pellentesque finibus ultricies suscipit. Cras quis lorem sit amet erat lacinia aliquet in nec ligula.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mx-auto mt-16">
            <div class="container-fluid mx-auto w-3/4">
                <h2 class="text-[#689D71] text-6xl font-bold">Nos valeurs</h2>
            </div>
            <div class="container-fluid mx-auto w-3/4 mt-8">
                <p class="text-center text-[50px] font-bold text-[#689D71]">"Une phrase qui représente bien notre salle de sport"</p>
            </div>
            <div class="container-fluid mx-auto w-3/4 my-12">
                <div class="flex space-x-6 mt-8">
                    <div class="w-2/12">
                        <p class="text-5xl text-[#689D71] font-bold">Valeur</p>
                    </div>
                    <div class="w-10/12">
                        <p class="text-4xl font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mx-auto w-3/4 my-12">
                <div class="flex space-x-6 mt-8">
                    <div class="w-2/12">
                        <p class="text-5xl text-[#689D71] font-bold">Valeur</p>
                    </div>
                    <div class="w-10/12">
                        <p class="text-4xl font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mx-auto w-3/4 my-12">
                <div class="flex space-x-6 mt-8">
                    <div class="w-2/12">
                        <p class="text-5xl text-[#689D71] font-bold">Valeur</p>
                    </div>
                    <div class="w-10/12">
                        <p class="text-4xl font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis tincidunt nunc, eget efficitur ante tincidunt nec.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid mx-auto w-1/2">
                <img src="{{ asset('images/illustration_presentation.png') }}" alt="Présentation" class="w-full">
            </div>
        </section>
        @include('layouts.banner-contact')
    </main>
</body>
@include('layouts.footer')