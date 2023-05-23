<?php

namespace App\Http\Controllers;

use App\Models\DetailEvent;
use App\Models\Divisi;
use App\Models\Event;
use App\Models\Property;
use App\Models\Team;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('event/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('event/add', [
            'dataDivisi' => Divisi::all(),
            'dataProperti' => Property::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'penyelenggara' => 'required',
            'nama_event' => 'required',
            'jadwal_event' => 'required',
            'alamat_event' => 'required',
            'harga' => 'required',
            'dp' => 'required',
            'sisa' => 'required',
        ]);

        // Simpan data event
        $event = new Event();
        $event->penyelenggara = $request->input('penyelenggara');
        $event->nama_event = $request->input('nama_event');
        $event->jadwal_event = $request->input('jadwal_event');
        $event->alamat_event = $request->input('alamat_event');
        $event->harga = $request->input('harga');
        $event->dp = $request->input('dp');
        $event->sisa = $request->input('sisa');
        $event->save();

        // Simpan data detail event
        foreach ($request->input('property') as $propertyId) {
            foreach ($request->input('divisi') as $divisiId) {
                $detailEvent = new DetailEvent();
                $detailEvent->id_event = $event->id;
                $detailEvent->id_property = $propertyId;
                $detailEvent->id_divisi = $divisiId;
                $detailEvent->save();
            }
        }


        return redirect('event')->with('success', 'Event berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
