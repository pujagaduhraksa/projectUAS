<?php

namespace App\Http\Controllers\API;

use App\Exams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    // Akses Login

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }

    // End Akses Login
    
    public function index()
    {
        // return Exams::all();
        return Exams::with('kategori')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "mata_pelajaran" => "required",
            "nama_pengawas" => "required",
            "durasi_ujian" => "required",
            "hari_pelaksanaan" => "required",
            "pembuat_soal" => "required"
        ]);

        if($validasi->passes()){
            return response()->json([
                'pesan' => 'Data Berhasil Disimpan',
                'data' => Exams::create($request->all())
            ]);
        }

        return response()->json([
            'pesan' => 'Data Gagal Ditambahkan',
            'data' => $validasi->errors()->all()
        ], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($exams)
    {
        $exams = Exams::with('kategori')->where('id', $exams)->first();

        if(empty($exams)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        } 
            return response()->json([
                'pesan' => 'Data Berhasil Ditemukan',
                'data' => $exams
            ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $exams)
    {
        $exams = Exams::where('id', $exams)->first();

        if(!empty($exams)){
            $validate = Validator::make($request->all(), [
                "mata_pelajaran" => "required",
                "nama_pengawas" => "required",
                "durasi_ujian" => "required",
                "hari_pelaksanaan" => "required",
                "pembuat_soal" => "required"
            ]);
        }
        
        if($validate->passes()){
            $exams->update($request->all());
            return response()->json([
                'pesan' => 'Data Berhasil Diedit',
                'data' => $exams
            ]);
        } else

        return response()->json([
            'pesan' => 'Data Gagal Ditambahkan',
            'data' => $validasi->errors()->all()
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($exams)
    {
        $detail = Exams::where('id', $exams)->first();

        if(empty($detail)){
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }

        $detail->delete();
        return response()->json([
            'pesan' => 'Data Berhasil Dihapus',
            'data' => $detail
        ], 200);
    }
}
