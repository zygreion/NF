<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => "Author with id $id not found!",
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => "get author by id $id",
            'data' => $author
        ], 200);
        // return view('authors.id', compact('id', 'author'));
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

    public function update($id, Request $request)
    {
        // 1. mencari data
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => "Author with id $id not found!",
            ], 404);
        }

        // 2. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
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
            'bio' => $request->bio,
        ];

        // 4. handle image (upload & delete image)
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $image->store('authors', 'public');

            if ($author->photo) {
                Storage::disk('public')->delete('authors/' . $author->photo);
            }

            $data['photo'] = $image->hashName();
        }

        // 5. update data baru ke database
        $author->update($data);

        return response()->json([
            'success' => true,
            'message' => "Author updated succesfully",
            'data' => $author,
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => "Author with id $id not found!",
            ], 404);
        }

        $author->delete();

        if ($author->photo) {
            // delete from storage
            Storage::disk('public')->delete('authors/' . $author->photo);
        }

        return response()->json([
            'success' => true,
            'message' => "Author deleted succesfully",
        ], 200);
    }
}
