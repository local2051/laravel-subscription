<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(Request $request, Website $website) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        if ($website->subscribers()->where('email', $data['email'])->exists()) {
            return response()->json(['message' => 'User is already subscribed to this website'], 400);
        }

        $subscriber = Subscriber::firstOrCreate($data);
        $website->subscribers()->attach($subscriber);

        return response()->json(['message' => 'Subscriber added successfully', 'subscriber' => $subscriber], 201);
    }
}
