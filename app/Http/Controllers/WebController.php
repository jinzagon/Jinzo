<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class WebController extends Controller
{
    public function index() {

    	$offers = Offer::get();

    	return view('index', compact('offers'));

    }
}
