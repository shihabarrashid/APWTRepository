<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    public function index()
    {
        return response() -> json(Tutor::latest()->get());
    }

    public function store(Request $request)
    {
        Tutor::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt ($request -> password)
        ]);

        return response () -> json('Successfully Created');
    }

    public function edit($id)
    {
        return response() -> json(Tutor::whereId($id)->first());
    }

    public function update(Request $request, $id)
    {
        $tutor = Tutor::whereId($id) -> first();

        $tutor -> update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response()->json('Success');
    }

    public function destroy($id)
    {
        Tutor::whereId($id) -> first()->delete();
        return response()->json('Deleted');
    }
}
