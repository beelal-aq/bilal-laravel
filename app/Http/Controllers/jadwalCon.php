<?php

namespace App\Http\Controllers;
use App\Models\jadwalModel;
use Illuminate\Http\Request;

class jadwalCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = jadwalModel::all();
        
        return view('jadwal', [
            "title" => "jadwal"     
        ], compact (
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new jadwalModel;
         
        return view('buatJadwal', [
            "title" => "Create Jadwal"     
        ], compact (
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new jadwalModel;

        $model->mahasiswa = $request->mahasiswa;
        $model->dosen = $request->dosen;
        $model->judul = $request->judul;
        $model->deskripsi = $request->deskripsi;
        $model->awal = $request->awal;
        $model->akhir = $request->akhir;
        $model->save();

        return redirect('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = jadwalModel::find($id);
         
        return view('showJdl', [
            "title" => "show Jadwal"     
        ], compact (
            'model'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = jadwalModel::find($id);
         
        return view('editJdl', [
            "title" => "Edit Jadwal"     
        ], compact (
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = jadwalModel::find($id);

        $model->mahasiswa = $request->mahasiswa;
        $model->dosen = $request->dosen;
        $model->judul = $request->judul;
        $model->deskripsi = $request->deskripsi;
        $model->awal = $request->awal;
        $model->akhir = $request->akhir;
        $model->save();

        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = jadwalModel::find($id);
        $model->delete();
        return redirect('jadwal');
    }
}
