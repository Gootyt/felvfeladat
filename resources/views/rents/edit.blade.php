<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Vissza
            </a>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24"
                    >
                        <header class="text-center">
                            <h2 class="text-2xl font-bold uppercase mb-1">
                                Foglalás szerkesztése
                            </h2>
                            <p class="mb-4">Szerkesztés: {{$rent->id}}</p>
                        </header>
    
                        <form method="POST" action="/rents/{{$rent->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <div class="mb-6">
                                <label for="type" class="inline-block text-lg mb-2"
                                    >Carid</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="carid"
                                    value="{{$rent->carid}}"
                                />
                                @error('carid')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="inline-block text-lg mb-2"
                                    >Név</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="name"
                                    value="{{$rent->name}}"
                                />
                                @error('name')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="email"
                                    class="inline-block text-lg mb-2"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="email"
                                    value="{{$rent->email}}"
                                />
                                @error('email')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label for="telephone" class="inline-block text-lg mb-2"
                                    >Telefon</label
                                >
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="telephone"
                                    value="{{$rent->telephone}}"
                                />
                                @error('telephone')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="address"
                                    class="inline-block text-lg mb-2"
                                >
                                    Cím
                                </label>
                                <input
                                    type="text"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="address"
                                    value="{{$rent->address}}"
                                />
                                @error('address')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            
    
                            <div class="mb-6">
                                <label
                                    for="pickuptime"
                                    class="inline-block text-lg mb-2"
                                >
                                   Mikortól
                                </label>
                                <input
                                    type="date"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="pickuptime"
                                    value="{{$rent->pickuptime}}"
                                />
                                @error('pickuptime')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <label
                                    for="droptime"
                                    class="inline-block text-lg mb-2"
                                >
                                   Meddig
                                </label>
                                <input
                                    type="date"
                                    class="border border-gray-200 rounded p-2 w-full"
                                    name="droptime"
                                    value="{{$rent->droptime}}"
                                />
                                @error('droptime')
                                 <p class="text-red-500 text-xs mt-1">{{$message}}</p>  
                                @enderror
                            </div>
    
                            <div class="mb-6">
                                <button
                                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                                >
                                    Bérlés módosítása
                                </button>
    
                                <a href="/" class="text-black ml-4"> Vissza </a>
                            </div>
                        </form>
    </x-card>
    </x-layout>