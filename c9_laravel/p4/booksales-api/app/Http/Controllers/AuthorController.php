<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Authors has no data',
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'get all authors',
            'data' => $authors
        ], 200);
        // return view('authors', ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'bio' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // 2. validate
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ]);
        }

        // 3. upload image
        $image = $request->file('photo');

        // 4. insert data
        $author = Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'photo' => $image->hashName(),
        ]);

        // Only add image if creation success
        $image->store('authors', 'public');

        // 5. response
        return response()->json([
            'success' => true,
            'message' => 'Author added succesfully',
            'data' => $author,
        ], 201);
    }
}
