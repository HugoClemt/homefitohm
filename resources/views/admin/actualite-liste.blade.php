@vite('resources/css/app.css')
<head>
    <title>Tableau de bord</title>
</head>
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header-admin')
    </header>
    <main class="bg-[#FFFFFF]">
        <div class="container mx-auto">
            <div class="row pt-6">
                <div class="col-12">
                    <h1 class="text-2xl font-bold text-center pt-3">Gestion des pages du site</h1>
                    <p class="text-center">Vous pouvez modifier l'image de bannière, et seulement l'image des pages ici.</p>
                </div>
            </div>
            <div class="row pt-6">
                <div class="grid grid-cols-5">
                    <div class="flex justify-center">
                        <a href="{{ route('ajouterActualite') }}" class="btn bg-[#689D71] text-button p-2 rounded-full">Ajouter une actualite</a>
                    </div>
                </div>
            </div>
            <div class="flex justify-center pt-6">
                <div class="w-full md:w-3/4 lg:w-2/3 xl:w-1/2">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2 text-center">Titre</th>
                                <th class="border px-4 py-2 text-center">Date</th>
                                <th class="border px-4 py-2 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actualites as $actualite)
                                <tr>
                                    <td class="border px-4 py-2 text-center">{{ $actualite->title }}</td>
                                    <td class="border px-4 py-2 text-center">{{ $actualite->date }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <a href="{{ route('modifierActualite', ['id' => $actualite->id]) }}" class="btn bg-[#689D71] text-button p-2 rounded-full">Modifier</a>
                                        <form id="deleteForm{{ $actualite->id }}" action="{{ route('supprimerActualite', ['id' => $actualite->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button onclick="deleteActualite({{ $actualite->id }})" class="btn bg-[#689D71] text-button p-2 rounded-full">Supprimer</button>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

<script>
    function deleteActualite(actualiteId) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cette actualite ?")) {
            document.getElementById('deleteForm' + actualiteId).submit();
        }
    }
</script>