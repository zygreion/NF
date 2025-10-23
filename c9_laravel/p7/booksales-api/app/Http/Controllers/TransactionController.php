<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                'success' => true,
                'message' => 'Transactions has no data',
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => 'get all transactions',
            'data' => $transactions
        ], 200);
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => "Transaction with id $id not found!",
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => "get transaction by id $id",
            'data' => $transaction
        ], 200);
        // return view('transactions.id', compact('id', 'transaction'));
    }

    public function store(Request $request)
    {
        // 1. validator & cek validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 2. generate orderNumber -> unique | ORD-003
        $uniqueCode = 'ORD-' . strtoupper(uniqid());

        // 3. ambil user yang sedang login & cek login
        $user = auth()->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!'
            ], 401);
        }

        // 4. mencari data buku dari request
        $book = Book::find($request->book_id);

        // 5. cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Book stock is not enough!'
            ], 400);
        }

        // 6. hitung total harga = price * quantity
        $totalAmount = $book->price * $request->quantity;

        // 7. kurangi stok buku (update)
        $book->stock -= $request->quantity;
        $book->save();

        // 8. simpan data transaksi
        $transaction = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $book->id,
            'total_amount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Transaction created successfully',
            'data' => $transaction,
        ], 201);
    }

    public function update($id, Request $request)
    {
        // 1. mencari data
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => "Transaction with id $id not found!",
            ], 404);
        }

        // 2. validator
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        // 3. ubah stock buku yang lama
        $oldBook = Book::find($transaction->book_id);
        $oldStock = round($transaction->total_amount / $oldBook->price);
        $oldBook->stock += $oldStock;
        $oldBook->save();

        // 4. mencari data buku dari request
        $book = Book::find($request->book_id);

        // 5. cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Book stock is not enough!'
            ], 400);
        }

        // 6. hitung total harga = price * quantity
        $totalAmount = $book->price * $request->quantity;

        // 7. kurangi stok buku (update)
        $book->stock -= $request->quantity;
        $book->save();

        // 8. siapkan data yang ingin diupdate
        $data = [
            'book_id' => $request->book_id,
            'total_amount' => $totalAmount,
        ];

        // 9. update data baru ke database
        $transaction->update($data);

        return response()->json([
            'success' => true,
            'message' => "Transaction updated succesfully",
            'data' => $transaction,
        ], 200);
    }

    public function destroy($id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => "Transaction with id $id not found!",
            ], 404);
        }

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => "Transaction deleted succesfully",
        ], 200);
    }
}
