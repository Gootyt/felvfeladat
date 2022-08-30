<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{   
    //összes autó
    public function index() {
        return view('cars.index', [
            'cars' => Car::latest()->filter(request(['extra', 'search']))->paginate(4)
            ]);
    }

    //egy autó
    public function show(Car $car) {
        return view('cars.show', [
            'car' => $car
        ]);
    }
    public function create() {
        return view('cars.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'price' => 'required',
            'active' => 'required',
            'fuel' => 'required',
            'seat' => 'required',
            'extras' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        Car::create($formFields);

        return redirect('/')->with('message', 'Autó hozzáadva');
    }

    // Szerkesztés
    public function edit(Car $car) {
        return view('cars.edit', ['car' => $car]);
    }

    // Módosítás
    public function update(Request $request, Car $car) {
        $formFields = $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'price' => 'required',
            'active' => 'required',
            'fuel' => 'required',
            'seat' => 'required',
            'extras' => 'required'
        ]);

        if($request->hasFile('picture')) {
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }

        $car->update($formFields);

        return back()->with('message', 'Autó módosítva');
    }

    public function destroy(Car $car) {
        $car->delete();
        return redirect('/')->with('message', 'Autó törölve');
    }
}