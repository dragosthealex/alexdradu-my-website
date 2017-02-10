<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
    * Corridor Putin game.
    *
    * @return \Illuminate\Http\Response
    */
    public function corridorPutin() {
      return view('demo.corridorPutin');
    }
}
