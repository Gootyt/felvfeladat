<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24"
                    >                       <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Elérhető autó keresése
                            </h2>
                            <p class="mb-4">Autó keresése</p>
                        </header>
                        <form action="" method="POST">
                            @csrf
                        <div class="col-md-3">
                            <label>Mikortól:</label>
                            <input type="date" name="dateFrom">
                        </div>
                        <div class="col-md-3">
                            <label>Meddig:</label>
                            <input type="date" name="dateTo"><br>
                            <input  type="submit" value="Keresés">
                        </div>
                    </x-card>
                </x-layout>