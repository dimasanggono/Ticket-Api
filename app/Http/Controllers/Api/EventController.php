<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $event = $request->all();

        $data = Event::create($event);

        return response()->json($data);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        return response()->json($event);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();


        $event = Event::findOrFail($id);
        $event->update($data);

        return response()->json($event);
    }

    public function delete($id)
    {
        $data = request()->all();
        $event = Event::findOrFail($id);
        $event->delete($data);
        return response()->json($event)->with('success', 'Data Delete Success!');
    }
}
