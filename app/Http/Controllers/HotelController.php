<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use App\Models\PemesananHotel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:hotel-view|hotel-create|hotel-edit|hotel-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:hotel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:hotel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:hotel-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $hotel = Hotel::latestPaginatedHotel(6);
        return view('hotel.index')->with('hotel', $hotel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'contact' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $id_user = Auth::user()->id;

        $fileDestination = 'uploaded/hotel';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);

        $hotel = new Hotel;
        $hotel->nama_hotel = $request->input('nama');
        $hotel->alamat_hotel = $request->input('alamat');
        $hotel->deskripsi = $request->input('deskripsi');
        $hotel->contact = $request->input('contact');
        $hotel->harga_hotel = $request->input('harga');
        $hotel->gambar = $fileDestination . '/' . $fileName;
        $hotel->id_user = $id_user;

        $hotel->save();

        return redirect()->route('hotel.index')->with('success', 'Berhasil menambahkan Hotel!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel.order')->with('hotel', $hotel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find($id);

        return view('hotel.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'contact' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $id_user = Auth::user()->id;

        $fileDestination = 'uploaded/hotel';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);

        $hotel = Hotel::find($id);
        $hotel->nama_hotel = $request->input('nama');
        $hotel->alamat_hotel = $request->input('alamat');
        $hotel->deskripsi = $request->input('deskripsi');
        $hotel->contact = $request->input('contact');
        $hotel->harga_hotel = $request->input('harga');
        $hotel->gambar = $fileDestination . '/' . $fileName;
        $hotel->id_user = $id_user;

        $hotel->save();

        return redirect()->route('hotel.index')->with('success', 'Berhasil memperbaharui hotel!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::find($id)->delete();

        return redirect()->route('hotel.index')->with('success', "Hotel berhasil dihapus!");
    }

    public function sort(Request $request)
    {
        $urut = $request->input('urut');

        if ($urut == 0) {
            $hotel = Hotel::latestPaginatedHotel(6);
            return view('hotel.index')->with('hotel', $hotel);
        } else if ($urut == 1) {
            $hotel = Hotel::hargaTerbesar(6);
            return view('hotel.index')->with('hotel', $hotel);
        } else if ($urut == 2) {
            $hotel = Hotel::hargaTerkecil(6);
            return view('hotel.index')->with('hotel', $hotel);
        }
    }

    public function chart()
    {
        return view('hotel.chart-penjualan');
    }
}
