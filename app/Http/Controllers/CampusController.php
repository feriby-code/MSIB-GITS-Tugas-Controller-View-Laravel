<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $name = 'Fulan';

    return view('campus/index', compact('name'));
  }
}
