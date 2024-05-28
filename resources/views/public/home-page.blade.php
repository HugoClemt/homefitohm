@vite('resources/css/app.css')
@include('layouts.head')
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header')
    </header>
    <main>
        <section class="container-fluid mx-auto block-prestation">
            <div class="container-fluid">
                <div class="flex justify-center items-center h-screen">
                    <div class="flex space-x-6 text-white w-11/12">
                        <div class="w-1/2 2xl:px-32 px-10">
                            <h1 class="text-6xl font-bold uppercase">Home Fit Ohm<br><span class="normal-case">Salle de sport à Bernay</span></h1>
                            <p class="text-xl mt-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue feugiat elit, et ornare lorem bibendum non. 
                                Vivamus convallis fermentum turpis, at porttitor neque feugiat ornare. Fusce congue quis dolor eu finibus. 
                                Aenean quis velit sollicitudin, maximus velit id, porta dolor. Suspendisse nec interdum felis. 
                                Aliquam eget dapibus ligula, eu molestie turpis. Fusce sit amet interdum libero. Suspendisse potenti. 
                                Praesent laoreet, ex sit amet consequat tristique, eros lorem tristique metus, eu porttitor velit dolor in massa. Nam faucibus mauris blandit urna varius molestie. Nam porttitor leo a efficitur sagittis. Nullam pellentesque est non augue posuere, a pulvinar mi porttitor. Curabitur egestas elementum nunc. Proin ut nisi non risus maximus eleifend. Pellentesque finibus ultricies suscipit. Cras quis lorem sit amet erat lacinia aliquet in nec ligula.</p>
                        </div>
                        <div class="w-1/2 2xl:pr-32 text-center content-center backdrop-blur-[5px] rounded">
                            <h2 class="text-6xl font-bold text-end">Abonnement<br> à partir de {{ $option->prix }}€/mois</h2>
                            <p class="text-5xl mt-8 mb-10">Contactez-nous</p>
                            <a href="tel:{{ $option->phone }}" class="text-4xl font-bold bg-white text-[#689D71] py-8 px-32 rounded-[90px]">{{ $option->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.actualite')
        @include('layouts.coach')
        @include('layouts.banner-contact')               
    </main>
</body>
@include('layouts.footer') 