<?php

namespace App\Http\Controllers;

use App\Exams;
use Illuminate\Http\Request;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function home()
    {
        return view('index', [
            "title" => "Home"
        ]);
        
    }
    
    public function index()
    {
        $exams = Exams::all();
        return view('exams.index', compact('exams'), [
            "title" => "Daftar Ujian"
        ]);
    }

    public function index2()
    {
        $exams = Exams::all();
        return view('exams.index2', compact('exams'), [
            "title" => "Details"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exams.create', [
            "title" => "FORM TAMBAH DATA UJIAN"
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
        Exams::create($request->all());
        return redirect('/detail')->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function show(Exams $exams)
    {
        return view('exams.show', compact('exams'), [
            "title" => "DETAIL DATA UJIAN"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function edit(Exams $exams)
    {
        return view('exams.edit', compact('exams'), [
            "title" => "FORM EDIT DATA UJIAN"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exams $exams)
    {
        Exams::where('id', $exams->id)
        ->update([
            'mata_pelajaran' => $request->mata_pelajaran,
            'nama_pengawas' => $request->nama_pengawas,
            'durasi_ujian' => $request->durasi_ujian,
            'hari_pelaksanaan' => $request->hari_pelaksanaan,
            'pembuat_soal' => $request->pembuat_soal,
            'kategori_id' => $request->kategori_id

        ]);
        return redirect('/detail')->with('status', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Exams  $exams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exams $exams)
    {
        Exams::destroy($exams->id);
        return redirect('/detail')->with('status', 'Data Tugas Dihapus');
    }
}
