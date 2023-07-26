<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request, Website $website) {
            $data = $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'string',
            ]);

            $post = $website->posts()->create($data);

            return response()->json(['message' => 'Post created successfully', 'post' => $post], 201);
        }
}
