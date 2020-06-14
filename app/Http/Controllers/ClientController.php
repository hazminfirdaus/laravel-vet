<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('first_name', 'asc')->get();
        
        return view('clients.index', compact('clients'));
    }
}
