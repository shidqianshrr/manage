<?php

namespace App\Http\Controllers;

use App\Models\EventModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data['page'] = 'Event';
        $data['event'] = EventModel::paginate(10);
        return view('event.index')->with($data);
    }

    public function create()
    {
        $data['page'] = 'Event';
        $data['event'] = EventModel::get();
        return view('event.create')->with($data);
    }

    public function store(Request $request)
    {
        $event = new EventModel();
        $event->nama = $request->nama;
        $event->lokasi = $request->nama;

        $image = $request->file('image');

            $imagename = date('Y-m-d')."_".$image->getClientOriginalName();
            $path = "files/event/images";
            $image->move($path, $imagename);

            $event->image = $imagename;
            $event->save();

        try {
            $event->save();
            if ($event->save()) {
                return redirect('event');
            }
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }

    public function edit($id)
    {
        $data['page'] = 'Event';
        $data['event'] = EventModel::where('id', $id)->first();
        return view('event.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $event = EventModel::where('id', $id)->first();
        $event->nama = $request->nama;
        $event->lokasi = $request->lokasi;

        if ($request->hasFile('image')){

            $image = $request->file('image');
    
            $imagename = date('Y-m-d ')."_".$image->getClientOriginalName();
            $path = "files/event/images";
            $image->move($path, $imagename);
            $event->image = $request = $imagename;
            $event->update();
    
            }

            try {
                $event->save();
                if ($event->save()) {
                    return redirect('event');
                }
            } catch (Exception $e) {
                report($e);
                return false;
            }
    }

    public function destroy($id)
    {
        $event = EventModel::where('id', $id);
        try {
            $event->delete();
            return redirect('event');
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
