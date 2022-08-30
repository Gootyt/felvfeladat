<x-layout>
   <x-card>
   <div class="mx-4">
      <div class="bg-gray-50 border border-gray-200 p-10 rounded">
          <header>
              <h1
                  class="text-3xl text-center font-bold my-6 uppercase"
              >
                  Foglalások kezelése
              </h1>
          </header>
  
          <table class="w-full table-auto rounded-sm">
              <tbody>
                  @unless($rents->isEmpty())
                  @foreach($rents as $rent)
                  <tr class="border-gray-300">
                      <td
                          class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                      >
                      <a href="/rents/{{$rent['id']}}">{{$rent['id']}}  {{$rent['carid']}}</a>
                      </td>
                      <td
                          class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                      >
                          <a
                          href="/rents/{{$rent->rent}}/edit"
                              class="text-blue-400 px-6 py-2 rounded-xl"
                              ><i
                                  class="fa-solid fa-pen-to-square"
                              ></i>
                              Szerkesztés</a
                          >
                      </td>
                      <td
                          class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                      >
                          <form action="POST" action="/rents/{{$rent->id}}">
                              <button class="text-red-600">
                                  <i
                                      class="fa-solid fa-trash-can"
                                  ></i>
                                  Törlés
                              </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
                  @else
                  <tr class="border-gray-300">
                     <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">Nem található foglalás</p>
                     </td>
                  </tr>
                  @endunless
              </tbody>
          </table>
      </div>
  </div>
   </x-card>
</x-layout>