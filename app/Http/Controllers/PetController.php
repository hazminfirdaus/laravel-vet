<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::orderBy('name', 'asc')->get();

        return view('pets.index', compact('pets'));
    }
}
