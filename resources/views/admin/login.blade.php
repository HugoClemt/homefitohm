@vite('resources/css/app.css')

<div class="container mx-auto h-screen flex w-1/2 justify-center items-center">
  <div class="card w-full max-w-md"> 
    <div class="card-header">
        <h2 class="text-5xl">Se connecter</h2>
    </div>
    <div class="card-body mt-10 text-xl">
      <form method="POST" action="{{ route('loginPost') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Adresse e-mail</label>
          <input type="email" class="form-control border rounded border-black" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control border rounded border-black" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
    </div>
  </div>
</div>