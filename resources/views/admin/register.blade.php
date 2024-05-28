@vite('resources/css/app.css')

<div class="container mx-auto mt-20">
    <div class="card">
        <div class="card-header">
            <h2>S'inscrire</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('registerPost') }}">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Créer un compte</button>
            </form>
        </div>
    </div>
</div>