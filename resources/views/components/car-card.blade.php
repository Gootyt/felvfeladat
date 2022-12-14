@props(['car'])

{{-- <h2><a href="/cars/{{$car['id']}}">{{$car['brand']}}  {{$car['type']}}</h2></a>
    <p>{{$car['price']}}$/nap</p> --}}
    
<x-card>
        <div class="flex">
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{$car->picture ? asset('storage/' . $car->picture) : asset('/images/no-image.jpg')}}"
                alt=""
            />
            <div>
                <h3 class="text-2xl">
                    <a href="/cars/{{$car['id']}}">{{$car['brand']}}  {{$car['type']}}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$car['fuel']}}</div>
                <x-car-extra :extrasCsv="$car->extras"/>
                <div class="text-lg mt-4">
                  <i class="fa-solid fa-file-invoice-dollar"></i> {{$car['price']}}Ft/nap
                </div>
            </div>
        </div>
</x-card>