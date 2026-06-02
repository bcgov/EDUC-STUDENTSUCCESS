<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App;

class FeslController extends Controller
{
  public function showFeslPage()
  {
    return view('pages.fesl');
  }
}
