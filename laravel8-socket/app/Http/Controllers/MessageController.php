<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        // Send event broadcast
        event(new MessageEvent($request->message));

        return response()->json(['message' => 'send message'], 200);
    }
}
