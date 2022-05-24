<?php

namespace App\Http\Controllers;

use App\Models\Cs;
use App\Exports\CsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class CsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:cs-view|cs-create|cs-edit|cs-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:cs-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:cs-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:cs-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cs = Cs::latest()->paginate(5);
        return view('cs.index')->with('cs', $cs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cs.create');
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
            'email' => 'required',
            'whatsapp' => 'required',
        ]);

        $id_user = Auth::user()->id;

        $cs = new Cs;
        $cs->nama = $request->input('nama');
        $cs->email = $request->input('email');
        $cs->no_whatsapp = $request->input('whatsapp');
        $cs->id_user = $id_user;
        
        $cs->save();

        return redirect()->route('cs.index')->with('success', 'Berhasil menambahkan kontak Customer Service!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cs  $cs
     * @return \Illuminate\Http\Response
     */
    public function show(Cs $cs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cs  $cs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cs = Cs::find($id);

        return view('cs.edit')->with('cs', $cs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cs  $cs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
        ]);

        $id_user = Auth::user()->id;

        $cs = Cs::find($id);
        $cs->nama = $request->input('nama');
        $cs->email = $request->input('email');
        $cs->no_whatsapp = $request->input('whatsapp');
        $cs->id_user = $id_user;
        
        $cs->save();

        return redirect()->route('cs.index')->with('success', 'Berhasil memperbaharui kontak Customer Service!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cs  $cs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cs::find($id)->delete();

        return redirect()->route('cs.index')->with('success', 'Kontak berhasil dihapus!');
    }

    public function export()
    { 
        return Excel::download(new CsExport, 'cs.xlsx');
    }
}
