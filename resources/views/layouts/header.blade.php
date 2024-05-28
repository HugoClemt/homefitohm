@vite('resources/js/app.js')

<div class="container-fluid align-middle justify-content-center w-full bg-[#FFFFFF] border-b-4 border-[#689D71] py-8">
  <div class="flex justify-center items-center gap-8">
    <a href="{{ route('home') }}" class="text-primary">
        <img src="{{ asset('images/homefitohm_logo.svg') }}" alt="Home Fit Ohm Logo" style="height: 75px;">
    </a>
    <nav>
      <ul class="flex flex-nowrap gap-8">
        <li><a href="{{ route('presentation') }}" class="text-primary">Présentation</a></li>
        <li><a href="{{ route('coach') }}" class="text-primary">Coachs</a></li>
        <li><a href="{{ route('activite') }}" class="text-primary">Activités</a></li>
        <li><a href="{{ route('actualite') }}" class="text-primary">Actualités</a></li>
        <!-- <li><a href="{{ route('calendrier') }}" class="text-primary">Planning</a></li> -->
        <li><a href="{{ route('contact') }}" class="text-primary">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
