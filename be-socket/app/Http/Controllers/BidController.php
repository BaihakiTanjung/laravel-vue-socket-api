<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EveryoneBid;
use App\Models\Bid;

class BidController extends Controller
{
    public function show()
    {

        $bids = Bid::orderBy('price', 'desc')->first();

        $json = [
            "success" => "data tersedia",
            "data" => $bids
        ];

        return response()->json($json, 200);
    }

    public function create(Request $request)
    {
        try {

            $bid = new Bid();
            $bid->user_id = $request->user_id;
            $bid->car_id = $request->car_id;
            $bid->price = $request->price;
            $bid->save();

            // Send event broadcast
            event(new EveryoneBid($request->price));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json(['success' => "sukses bid"], 200);
    }
}
