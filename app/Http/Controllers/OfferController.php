<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    public function index() {

    	$offers = Offer::get();

    	return view('admin.offers.index', compact('offers'));

    }

    public function create() {

    	return view('admin.offers.create');

    }
 
    public function store(Request $request) {

    	$offer = new Offer;

    	$offer->name = $request->name;
    	$offer->description = $request->description;
    	$offer->image_50 = $request->image_50;
    	$offer->image_350 = $request->image_350;
    	$offer->link = $request->link;

    	$offer->save();

    	return redirect('/admin/offers');

    }
}
