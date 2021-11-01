<?php

namespace App\Http\Controllers;
use App\Models\dosenModel;
use Illuminate\Http\Request;

class dosenCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = dosenModel::all();
        
        return view('dosen', [
            "title" => "dosen"     
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
        $model = new dosenModel;
         
        return view('buatDosen', [
            "title" => "Create Dosen"     
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
        $model = new dosenModel;

        $model->nama_D = $request->nama_D;
        $model->nidn = $request->nidn;
        $model->alamat_D = $request->alamat_D;
        $model->kontak = $request->kontak;
        
        $model->save();

        return redirect('dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = dosenModel::find($id);
         
        return view('showDsn', [
            "title" => "show Dosen"     
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
        $model = dosenModel::find($id);
         
        return view('editDsn', [
            "title" => "Edit Dosen"     
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
        $model = dosenModel::find($id);

        $model->nama_D = $request->nama_D;
        $model->nidn = $request->nidn;
        $model->alamat_D = $request->alamat_D;
        $model->kontak = $request->kontak;
       
        $model->save();

        return redirect('dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = dosenModel::find($id);
        $model->delete();
        return redirect('dosen');
    }
}
