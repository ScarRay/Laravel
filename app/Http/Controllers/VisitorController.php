<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Http\Controllers\Controller;

class VisitorController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
      return view('cars.accueil');
    }

    public function show($id)
    {
      $car = Car::find($id);
      return view('cars.show', array('car' => $car));
    }
}

?>