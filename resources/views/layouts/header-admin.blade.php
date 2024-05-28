@vite('resources/js/app.js')

<div class="container-fluid align-middle justify-content-center w-full bg-[#FFFFFF] border-b-2 border-[#689D71] py-8">
  <div class="flex justify-center items-center gap-8">
    <a href="{{ route('tableauBord') }}" class="text-primary">
        <img src="{{ asset('images/homefitohm_logo.svg') }}" alt="Home Fit Ohm Logo" style="height: 75px;">
    </a>
    <nav>
      <ul class="flex flex-nowrap gap-8">
       <!-- <li class="has-submenu"><a href="{{ route('listerPage') }}" class="text-primary">Liste des Pages</a>
           <ul class="submenu">
            <li><a href="{{ route('ajouterPage') }}" class="text-submenu">Ajouter une page</a></li>
          </ul> 
        </li>-->
        <!-- <li><a href="{{ route('médiathèque') }}" class="text-primary">Médiathèque</a></li> -->
        <li class="has-submenu"><a href="{{ route('listerActualite') }}" class="text-primary">Actualités</a>
          <ul class="submenu">
            <li><a href="{{ route('ajouterActualite') }}" class="text-submenu">Ajouter une actualité</a></li>
          </ul>
        </li>
        <li class="has-submenu"><a href="{{ route('listerCoach') }}" class="text-primary">Coach</a>
          <!-- <ul class="submenu">
            <li><a href="" class="text-submenu">Ajouter un cours</a></li>
          </ul> -->
        </li>
        <li class="has-submenu"><a href="{{ route('listerActivite') }}" class="text-primary">Activités</a>
          <ul class="submenu">
            <li><a href="{{ route('ajouterActivite') }}" class="text-submenu">Ajouter un activités</a></li>
          </ul>
        <!-- <li><a href="{{ route('calendrier') }}" class="text-primary">Calendrier</a></li> -->
        <li class="has-submenu"><a href="{{ route('option') }}" class="text-primary">Paramètre</a>
          <ul class="submenu">
            <li><a href="{{ route('home') }}" class="text-submenu" target="_blank">Voir le site</a></li>
            <li><a href="{{ route('compte') }}" class="text-submenu">Compte</a></li>
            <li><a href="{{ route('option') }}" class="text-submenu">Option du site</a></li>
            <li><a href="{{ route('logout') }}" class="text-submenu">Déconnexion</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>