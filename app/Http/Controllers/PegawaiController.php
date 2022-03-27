<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datap = pegawai::all();

        return view('pegawai.index',compact(
            'datap'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $model = new Pegawai;
        return view('pegawai.create',compact(
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
       
        $model = new pegawai;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->tgllahir = $request->tgllahir;
        $model->golongan = $request->golongan;
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $model =  Pegawai :: find($id) ;
        return view('pegawai.edit',compact(
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
        
        $model =  Pegawai :: find($id);
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->tgllahir = $request->tgllahir;
        $model->golongan = $request->golongan;
        $model->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model =  Pegawai :: find($id);
        $model->delete();
        return redirect('pegawai');
    }
}
