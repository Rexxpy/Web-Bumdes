<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\GambarKegiatan;
use App\Models\DataKegiatan;
use Storage;

class DataKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakegiatan = DB::table('kegiatan')->get();
        return view('data_kegiatan')->with('datas', $datakegiatan);
    }

    public function show_tambah_kegiatan(){
        return view('tambah_data_kegiatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $max = DB::table('kegiatan')->max('id') + 1; 
        DB::statement("ALTER TABLE kegiatan AUTO_INCREMENT =  $max");

        $max1 = DB::table('gambar_kegiatan')->max('id') + 1; 
        DB::statement("ALTER TABLE gambar_kegiatan AUTO_INCREMENT =  $max1");

        $kegiatan = new DataKegiatan();
        $kegiatan->nama_kegiatan = $request->input('inputnamakegiatan');
        $kegiatan->deskripsi_kegiatan = $request->input('inputdeskripsikegiatan');
        $kegiatan->tanggal = $request->input('inputtglkegiatan');
        $kegiatan->video_kegiatan = $request->file('videokegiatan')->store('kegiatan-images', 'public');
        $kegiatan->save();

        $gambar_kegiatan = new GambarKegiatan();
        $gambar_kegiatan->galeri_kegiatan = $request->file('gambarkegiatan')->store('kegiatan-images', 'public');
        $gambar_kegiatan->id_kegiatan = $kegiatan->id;
        $gambar_kegiatan->save();

        return redirect()->route('datakegiatan');

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
        $tampil = DB::table('kegiatan')
                        ->join('gambar_kegiatan', 'kegiatan.id', '=', 'gambar_kegiatan.id_kegiatan')
                        ->where('kegiatan.id',$id)
                        ->get();                

        return view('edit_data_kegiatan')->with('datakegiatan',$tampil);
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
        $tglinsert =  date('Y-m-d H:i:s');

        DB::table('kegiatan')->where('id',$id)->update([
            'nama_kegiatan'=>$request->input('inputnamakegiatan'),
            'deskripsi_kegiatan'=>$request->input('inputdeskripsikegiatan'),
            'tanggal'=>$request->input('inputtglkegiatan'),
            'video_kegiatan'=>$request->file('videokegiatan')->store('kegiatan-images', 'public'),
            "updated_at"=> $tglinsert
        ]);
        DB::table('gambar_kegiatan')->where('id',$id)->update([
            'galeri_kegiatan'=>$request->file('gambarkegiatan')->store('kegiatan-images', 'public'),
        ]);

        return redirect()->route('datakegiatan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        DB::table('kegiatan')->where('id',$id)->delete();
        DB::table('gambar_kegiatan')->where('id',$id)->delete();
         
        return redirect()->route('datakegiatan');
    }
}
