@vite('resources/css/app.css')
<head>
    <title>Tableau de bord</title>
</head>
<body>
    <header class="bg-slate-500 text-white">
        @include('layouts.header-admin')
    </header>
    <main class="bg-slate-200">
        <div class="container mx-auto">
            <div class="flex justify-center items-center h-screen">
                <div class="text-center">
                    <h1 class="text-6xl font-bold">Admin</h1>
                    <p class="text-xl mt-4">Welcome to the admin panel</p>
                </div>
            </div>
        </div>
    </main>
</body>
