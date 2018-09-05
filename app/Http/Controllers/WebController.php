<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\User;
use  PragmaRX\Tracker\Vendor\Laravel\Facade as Tracker;

class WebController extends Controller
{
    public function index() {

        $offers = Offer::active()->orderBy('rank')->take(12)->get();
        $topOffers = Offer::active()->orderBy('rank')->take(5)->get();
        $numOffers = Offer::count();
        $numUsers = Tracker::onlineUsers()->count();

        $vistors = Tracker::logByRouteName('tracker.stats.log')
            ->select('tracker_log.session_id')
            ->groupBy('tracker_log.session_id')
            ->distinct()
            ->count('tracker_log.session_id');


        return view('index')
            ->with('topOffers', $topOffers)
            ->with('numOffers', $numOffers)
            ->with('numUsers', $numUsers)
            ->with('vistors', $vistors)
            ->with('offers', $offers);

    }
}
