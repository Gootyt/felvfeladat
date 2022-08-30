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
                        <img
                            class="w-96 mr-6 mb-6"
                            src="{{$car->picture ? asset('storage/' . $car->picture) : asset('/images/no-image.jpg')}}"
                alt=""
                        />

                        <h3 class="text-2xl mb-2">{{$car['brand']}}  {{$car['type']}}</h3>
                        <div class="text-xl font-bold mb-4">{{$car['fuel']}}</div>
                        <x-car-extra :extrasCsv="$car->extras"/>
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-file-invoice-dollar"></i> {{$car['price']}}Ft/nap
              </div>
                        
                </x-card>
                <x-card class="mt-4 p-2 flex space-x-6">
                    <a href="/cars/{{$car->id}}/edit">
                      <i class="fa-solid fa-pencil"></i> Szerkesztés
                    </a>
                    <form method="POST" action="/cars/{{$car->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Törlés</button>
                      </form>
                </x-card>
            </div>
{{-- <h2>{{$car['brand']}}  {{$car['type']}}</h2>
    <p>
        <ul>
            <li>Ár: {{$car['price']}} $/nap</li>
            <li>Üzemanyag: {{$car['fuel']}}</li>
            <li>Ülések száma: {{$car['seat']}}</li>
        </ul>
        </p> --}}
</x-layout>