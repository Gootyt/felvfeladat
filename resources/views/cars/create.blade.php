<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Vissza
</a>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24"
                >
               
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Autó hozzáadása
                        </h2>
                        <p class="mb-4">Autó hozzáadása</p>
                    </header>

                    <form method="POST" action="/cars" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="brand"
                                class="inline-block text-lg mb-2"
                                >Autó márkája</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="brand" placeholder="Volkswagen" 
                            />
                            @error('brand')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="type" class="inline-block text-lg mb-2"
                                >Autó típusa (Model)</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="type"
                                placeholder="Passat"
                            />
                            @error('type')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="price"
                                class="inline-block text-lg mb-2"
                                >Bérleti díj</label
                            >
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="price"
                                placeholder="30000"
                            />
                            @error('price')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="active"
                                class="inline-block text-lg mb-2"
                                >Aktív (1:igen, 0:nem)</label
                            >
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="active"
                                placeholder="30000"
                            />
                            @error('active')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="fuel" class="inline-block text-lg mb-2"
                                >Üzemanyag típusa</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="fuel"
                            />
                            @error('fuel')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="seat"
                                class="inline-block text-lg mb-2"
                            >
                                Ülések száma
                            </label>
                            <input
                                type="number"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="seat"
                            />
                            @error('seat')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        

                        <div class="mb-6">
                            <label for="picture" class="inline-block text-lg mb-2">Autó képe
                            </label>
                            <input
                                type="file"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="picture"
                            />
                            @error('picture')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="extras"
                                class="inline-block text-lg mb-2"
                            >
                            Extrák (vesszővel és szóközzel elválasztva)
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="extras"
                                rows="5"
                                placeholder="ülésfűtés, utasoldali légzsák"
                            ></textarea>
                            @error('extras')
                             <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Autó létrehozása
                            </button>

                            <a href="/" class="text-black ml-4"> Vissza </a>
                        </div>
                    </form>
</x-card>
</x-layout>