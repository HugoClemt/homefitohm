<footer class="bg-[#689D71] text-white">
    <div class="container mx-auto py-9">
        <div class="w-11/12 mx-auto">
            <div class="flex flex-row">
                <div class="w-1/2 flex items-center">
                    <ul>
                        <li>
                            <a href="{{ route('mentionsLegales') }}" class="text-3xl font-bold">Mentions légales</a>
                        </li>
                        <li>
                            <a href="{{ route('politiqueConfidentialite') }}" class="text-3xl font-bold">Politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/2 text-3xl font-light content-center">
                    <p>Horaire d'ouverture</p>
                    <p>Lun Mar Jeu Ven: 9h30 - 21h</p>
                    <P>Mer: 14h - 21h</P>
                    <p>Samedi: 9h30 - 12h30</p>
                </div>
                <div class="w-1/2 text-3xl font-light content-center">
                    <p>Home Fit Ohm</p>
                    <p>{{ $option->adresse }}</p>
                    <p>{{ $option->ville}} - {{ $option->code_postal }}</p>
                    <p class="mt-6">{{ $option->phone }}</p>
                    <p>{{ $option->email }}</p>
                </div>
                <div class="w-1/6 content-center">
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/Facebook.svg') }}" alt="facebook" class="w-12 h-12 mb-4">
                    </a>
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/Instagram.svg') }}" alt="instagram" class="w-12 h-12">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>