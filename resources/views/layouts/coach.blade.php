<section class="container-fluid mx-auto">
    <div class="container-fluid mx-auto ">
        <div class="flex justify-center items-center">
            <div class="flex space-x-6 text-white w-11/12 mt-10">
                <div class="w-1/2 text">
                    <h2 class="line text-6xl font-bold text-[#689D71]">Coach à l'affiche</h2>
                </div>
            </div>
        </div>
        <div>
            <div class="flex space-x-6 w-11/12 mx-auto mt-10 bg-[#689D71] rounded-[32px]">
                <div class="flex justify-center items-center">
                    <div class="w-3/4 text-white px-16">
                        <h3 class="text-4xl font-bold">{{ $coach->prenom }}</h3>
                        <h3 class="text-3xl font-normal">{{ $coach->domaine }}</h3>
                        <p class="text-2xl font-light py-9">{{ $coach->description }}</p>
                        <a href="{{ route('coach') }}" class="text-3xl font-bold bg-white text-[#689D71] py-4 px-16 rounded-[90px]">Découvrez nos coachs</a>
                    </div>
                    <div class="w-1/4">
                        <img src="{{ asset('storage/images/'.$coach->image_name) }}" alt="" class="w-full h-96 object-cover rounded-r-[32px]">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>