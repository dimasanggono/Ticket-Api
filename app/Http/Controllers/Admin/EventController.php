<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        $user = User::all();
        return View('pages.admin.event.index', [
            'event' => $event,
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('pages.admin.event.create');
    }

    public function store(Request $request)
    {
        $event = $request->all();
        $event['image'] = $request->file('image')->store(
            'assets/event',
            'public'
        );

        Event::create($event);

        return redirect()->route('event');
    }



    public function show($id)
    {
        $event = Event::findOrFail($id);

        return view('pages.admin.event.detail', [
            'event' => $event
        ]);
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
