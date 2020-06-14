<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchpageController extends Controller
{
  public function index()
  {
    return view('searchpage.index');
  }
}
