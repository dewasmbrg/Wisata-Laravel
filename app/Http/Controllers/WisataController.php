<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:wisata-view|wisata-create|wisata-edit|wisata-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:wisata-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:wisata-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wisata-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::latestPaginatedWisata(9);
        return view('wisata.index')->with('wisata', $wisata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wisata.create');
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
            'provinsi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $id_user = Auth::user()->id;
        
        $fileDestination = 'uploaded/wisata';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);

        $wisata = new Wisata;
        $wisata->nama_wisata = $request->input('nama');
        $wisata->provinsi_id = $request->input('provinsi');
        $wisata->deskripsi = $request->input('deskripsi');
        $wisata->gambar = $fileDestination . '/' . $fileName;
        $wisata->id_user = $id_user;

        $wisata->save();

        return redirect()->route('wisata.index')->with('success', 'Berhasil menambahkan wisata!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::with('getProvinsi')->find($id);

        return view('wisata.show')->with('wisata', $wisata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::with('getProvinsi')->find($id);

        return view('wisata.edit')->with('wisata', $wisata);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'provinsi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $id_user = Auth::user()->id;

        $fileDestination = 'uploaded/wisata';
        $file = $request->file('gambar');
        $extension = $request->file('gambar')->getClientOriginalName();
        $fileName = md5_file($file) . '.' . $extension;
        $file->move($fileDestination, $fileName);
            
        $wisata = Wisata::find($id);
        $wisata->nama_wisata = $request->input('nama');
        $wisata->deskripsi = $request->input('deskripsi');
        $wisata->provinsi_id = $request->input('provinsi');
        $wisata->gambar = $fileDestination . '/' . $fileName;
        $wisata->id_user = $id_user;

        $wisata->save();

        return redirect()->route('wisata.index')->with('success', 'Berhasil memperbaharui pengumuman '.$wisata->nama_wisata );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wisata::find($id)->delete();

        return redirect()->route('wisata.index')->with('success', "Berhasil menghapus wisata!");
    }

    public function filter(Request $request)
    {
        $provinsi = $request->input('provinsi');
        $wisata = Wisata::get()->where('provinsi_id', $provinsi);
        
        if($provinsi == 0) {
            return redirect()->route('wisata.index');
        }
        
        return view('wisata.index')->with('wisata', $wisata);
    }
}
