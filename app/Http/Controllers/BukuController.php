<?php

namespace App\Http\Controllers;

use App\Models\BukuModel;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cari(Request $request)
    {
        $cari = $request->cariBuku;
        $bk = BukuModel::where('Judul', 'like', '%' . $cari . '%')->paginate(5);
        return view('buku', compact('bk'));
    }


    function index()
    {
        $bk = BukuModel::paginate(5);
        return view('buku', compact('bk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_buku')
            ->with('url_form', url('/buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Judul' => 'required|string|max:50',
            'Penulis' => 'required|string|max:50',
            'Tanggal_Terbit' => 'required|date',
            'Genre' => 'required|in:komedi,aksi,horor',
        ]);
        $data = BukuModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('buku')
            ->with('success', 'buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(BukuModel $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $buku = BukuModel::find($id);
        return view('create_buku')
            ->with('bk', $buku)
            ->with('url_form', url('/buku/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'Judul' => 'required|string|max:50',
            'Penulis' => 'required|string|max:50',
            'Tanggal_Terbit' => 'required|date',
            'Genre' => 'required|in:komedi, aksi, horor',
        ]);
        $data = BukuModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('buku')
            ->with('success', 'buku Berhasil Diedit');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BukuModel::where('id', '=', $id)->delete();
        return redirect('buku')
            ->with('success', 'buku Berhasil di hapus');
    }
}
