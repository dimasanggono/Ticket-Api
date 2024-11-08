<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\tickeCategory;

class TicketCategory extends Controller
{
    public function index()
    {
        $data = tickeCategory::all();
        return response()->json($data);
    }


    public function Create(Request $request)
    {
        $ticket = $request->all();

        $data = tickeCategory::create($ticket);

        return response()->json($data);
    }


    public function show($id)
    {
        $ticket = tickeCategory::findOrFail($id);

        return response()->json($ticket);
    }

    public function update(Request $request, $id)

    {
        $ticket = $request->all();
        $data = tickeCategory::findOrFail($id);
        $data->update($ticket);

        return response()->json($ticket);
    }

    public function delete(Request $request, $id)
    {

        $ticket = $request->all();
        $data = tickeCategory::findOrFail($id);
        $data->delete($ticket);

        return response()->json($ticket);
    }
}
