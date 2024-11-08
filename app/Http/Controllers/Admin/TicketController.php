<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticket;
use PHPUnit\Framework\Attributes\Ticket as AttributesTicket;

class TicketController extends Controller
{
    public function index()
    {
        $ticket = Ticket::all();
        return response()->json($ticket);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $ticket = Ticket::create($data);

        return response()->json($ticket);
    }

    public function show($id)
    {
        $ticket = Ticket::FindOrFail($id);
        return response()->json($ticket);
    }
}
