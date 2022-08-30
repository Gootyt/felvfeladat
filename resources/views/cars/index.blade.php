<x-layout>
@include('partials._hero')
@include('partials._search')    
<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >

@unless(count($cars) == 0)

@foreach ($cars as $car)
   <x-car-card :car="$car"/> 
@endforeach

@else
<p>Nem található autó</p>
@endunless
</div>
<div class="mt-6 p-4">
   {{$cars->links()}}
</div>
</x-layout>