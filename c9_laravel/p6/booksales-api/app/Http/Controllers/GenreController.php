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

    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => "Genre with id $id not found!",
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => "get genre by id $id",
            'data' => $genre
        ], 200);
        // return view('genres.id', compact('id', 'genre'));
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



    public function update($id, Request $request)
    {
        // 1. mencari data
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => "Genre with id $id not found!",
            ], 404);
        }

        // 2. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        // 3. siapkan data yang ingin diupdate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // 4. update data baru ke database
        $genre->update($data);

        return response()->json([
            'success' => true,
            'message' => "Genre updated succesfully",
            'data' => $genre,
        ], 200);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                'success' => false,
                'message' => "Genre with id $id not found!",
            ], 404);
        }

        $genre->delete();

        return response()->json([
            'success' => true,
            'message' => "Genre deleted succesfully",
        ], 200);
    }
}
