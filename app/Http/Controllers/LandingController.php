<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $name = 'Fulan';
    $location = 'Indonesia';

    $data['name'] = $name;
    $data['location'] = $location;

    return view('landing/index', $data);
  }

  public function profile()
  {
    return view('profile/index');
  }

  public function campus()
  {
    return view('campus/index');
  }
}
