<x-layout>
    {{-- @include('partials._hero')
    @include('partials._search')   --}} 
    
    <a href="/" class="inline-block text-black ml-4 mb-4"
                    ><i class="fa-solid fa-arrow-left"></i> Vissza
                </a>
                <div class="mx-4">
                    <x-card class="p-24">
                        <div
                            class="flex flex-col items-center justify-center text-center"
                        >
                            
    
                            <h3 class="text-2xl mb-2">{{$rent['id']}}  {{$rent['carid']}}</h3>
                            <div class="text-xl font-bold mb-4">{{$rent['address']}}</div>
                            <div class="text-lg my-4">
                                <i class="fa-solid fa-file-invoice-dollar"></i> {{$rent['email']}}
                  </div>
                            <div class="border border-gray-200 w-full mb-6"></div>
                            <div>
                                <h3 class="text-3xl font-bold mb-4">
                                    Bérlés adatai
                                </h3>
                               
                            </div>
                        </div>
                    </x-card>
                    <x-card class="mt-4 p-2 flex space-x-6">
                        <a href="/rents/{{$rent->rentid}}/edit">
                          <i class="fa-solid fa-pencil"></i> Szerkesztés
                        </a>
                        <form method="POST" action="/rents/{{$rent->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Törlés</button>
                          </form>
                    </x-card>
                </div>
    </x-layout>