<?php

namespace App\Http\Controllers;

use App\Models\mahasiswaModel;
use Illuminate\Http\Request;



class mahasiswaCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = mahasiswaModel::all();
        
        return view('mahasiswa', [
            "title" => "mahasiswa"     
        ], compact (
            'datas'
        ));}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new mahasiswaModel;
         
        return view('buatMahasiswa', [
            "title" => "Createmahasiswa"     
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
        $model = new mahasiswaModel;

        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->alamat = $request->alamat;
        $model->ttl = $request->ttl;
        $model->thn_masuk = $request->thn_masuk;
        $model->save();

        return redirect('mahasiswa');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = mahasiswaModel::find($id);
         
        return view('showMhs', [
            "title" => "show mahasiswa"     
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
        $model = mahasiswaModel::find($id);
         
        return view('editMhs', [
            "title" => "Editmahasiswa"     
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
        $model = mahasiswaModel::find($id);

        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->alamat = $request->alamat;
        $model->ttl = $request->ttl;
        $model->thn_masuk = $request->thn_masuk;
        $model->save();

        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = mahasiswaModel::find($id);
        $model->delete();
        return redirect('mahasiswa');
    }
}
