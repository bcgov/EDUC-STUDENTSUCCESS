<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;



use App;

class DataLiteracyController extends Controller
{
  public function showDataLiteracyPage()
  {
    return view('pages.dataLiteracy');
  }
}
