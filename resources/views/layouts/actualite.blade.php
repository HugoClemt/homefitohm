<section class="container-fluid mx-auto">
    <div class="container-fluid mx-auto ">
        <div class="flex justify-center items-center">
            <div class="flex space-x-6 text-white w-11/12 mt-10">
                <div class="w-1/2 text">
                    <h2 class="line text-6xl font-bold text-[#689D71] ">Dernières actualités</h2>
                </div>
            </div>
        </div>
        <div class="flex space-x-6 w-11/12 mx-auto mt-10">
            @foreach($actualites as $actualite)
            <div class="w-1/3">
                <div class="flex flex-col justify-center items-center">
                    <img src="{{ asset('storage/images/'.$actualite->image_name) }}" alt="" class="w-full h-96 object-cover rounded-[32px]">
                    <div class="w-full">
                        <h3 class="text-3xl font-bold">{{ $actualite->title }}</h3>
                        <p class="text-2xl font">{{ $actualite->date }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> 