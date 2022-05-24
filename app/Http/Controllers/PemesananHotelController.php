<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Models\PemesananHotel;
use Illuminate\Support\Facades\Auth;


class PemesananHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_hotel)
    {
        $this->validate($request, [
            'nama_pemesan' => 'required',
            'lama_inap' => 'required',
            'tgl_booking' => 'required',
        ]);

        $id_user = Auth::user()->id;

        $pesanan = new PemesananHotel;
        
        $pesanan->nama_pemesan = $request->input('nama_pemesan');
        $pesanan->lama_inap = $request->input('lama_inap');
        $pesanan->tanggal_pesanan = $request->input('tgl_booking');
        $pesanan->id_hotel = $id_hotel;
        $pesanan->id_user = $id_user;

        $pesanan->save();

        // $pesanan = PemesananHotel::with('getHotel')->find($id_hotel);
        // $pesanan->getHotel = PemesananHotel::with('getUser')->find($id_user);
        
        $pdf = PDF::loadView('hotel.order-room', compact('pesanan'));

        return $pdf->download('order-room.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PemesananHotel  $pemesananHotel
     * @return \Illuminate\Http\Response
     */
    public function show(PemesananHotel $pemesananHotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PemesananHotel  $pemesananHotel
     * @return \Illuminate\Http\Response
     */
    public function edit(PemesananHotel $pemesananHotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PemesananHotel  $pemesananHotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PemesananHotel $pemesananHotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PemesananHotel  $pemesananHotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PemesananHotel $pemesananHotel)
    {
        //
    }
}
