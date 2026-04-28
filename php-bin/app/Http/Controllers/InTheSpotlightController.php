<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;



use App;

class InTheSpotlightController extends Controller
{
  public function showInTheSpotlightPage()
  {
    return view('pages.in-the-spotlight');
  }
}
