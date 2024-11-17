<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();

        return response()->json($transaction);
    }

    public function create(Request $request)
    {
        $transaction = $request->all();

        $data = Transaction::create($transaction);
        return response()->json($data);
    }
}
