<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function available() {
        return view('rents.available');
    }


/*     public function availableSearch(Request $request) {
        $data = Rent::whereBetween('pickuptime',[$request->dateFrom.' 00:00:00',$request->dateTo.' 23:59:59'])->get();
        return $data;
    } */



    public function show(Rent $rent) {
        return view('rents.show', [
            'rent' => $rent
        ]);
    }
    public function create() {
        return view('rents.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'carid' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'pickuptime' => 'required',
            'droptime' => 'required'
        ]);

        Rent::create($formFields);

        return redirect('/')->with('message', 'Foglalás hozzáadva');
    }

    // Szerkesztés
    public function edit(Rent $rent) {
        return view('rents.edit', ['rent' => $rent]);
    }

    // Módosítás
    public function update(Request $request, Rent $rent) {
        $formFields = $request->validate([
            'carid' => 'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'telephone' => 'required',
            'pickuptime' => 'required',
            'droptime' => 'required'
        ]);

        $rent->update($formFields);

        return back()->with('message', 'Foglalás módosítva');
    }

    public function destroy(Rent $rent) {
        $rent->delete();
        return redirect('/')->with('message', 'Foglalás törölve');
    }

    public function manage(Rent $rent) {
        return view('rents.manage', ['rent' => $rent]);
    }

    /* public function availableSearch(Request $request){
        $arents=DB::SELECT("SELECT * FROM rents WHERE id NOT IN (SELECT rentid FROM rent WHERE '$$request->dateFrom' BETWEEN pickuptime AND droptime)");

        $data=[];
        foreach($arents as $rent){
            ;
        }

        return response()->json(['data'=>$data]);
    } */
}