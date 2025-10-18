<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Genres has no data',
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'get all genres',
            'data' => $genres
        ], 200);
        // return view('genres', ['genres' => $genres]);
    }

    public function store(Request $request)
    {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        // 2. validate
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ]);
        }

        // 3. insert data
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 4. response
        return response()->json([
            'success' => true,
            'message' => 'Genre added succesfully',
            'data' => $genre,
        ], 201);
    }
}
