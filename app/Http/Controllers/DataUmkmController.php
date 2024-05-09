<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DataUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataproduk = DB::table('produk')->get();

        return view('data_umkm')->with('datas', $dataproduk)->with('datafilter')->with('filter') ->with('start')->with('end');
    }

    public function show_tambah_umkm(){
        return view('tambah_data_umkm');
    }

    public function filter_umkm(Request $request){
        $filter = $request->input('b-umkm');

        $start = Carbon::parse($request->startd);
        $end = Carbon::parse($request->endd);

        if ($filter == 'produk') {

            $tampil = DB::table($filter)   
                        ->whereDate('created_at','<=',$end->format('y-m-d'))
                        ->whereDate('created_at','>=',$start->format('y-m-d'))->get();
       
       } else  if ($filter == 'jasa') {

            $tampil = DB::table($filter)   
                        ->whereDate('created_at','<=',$end->format('y-m-d'))
                        ->whereDate('created_at','>=',$start->format('y-m-d'))->get();

       } else  if ($filter == 'wisata') {

            $tampil = DB::table($filter)   
                        ->whereDate('created_at','<=',$end->format('y-m-d'))
                        ->whereDate('created_at','>=',$start->format('y-m-d'))->get();
       } 

       return view('data_umkm')->with('datas', $tampil)->with('filter',$filter) ->with('start',$start)->with('end',$end);


        // dd($request->input('b-umkm'));
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
        $jenisumkm =$request->input('jenisumkm');
        $tglinsert =  date('Y-m-d H:i:s');

        $max = DB::table('produk')->max('id') + 1; 
        DB::statement("ALTER TABLE produk AUTO_INCREMENT =  $max");
        
        $max1 = DB::table('gambar_wisata')->max('id') + 1; 
        DB::statement("ALTER TABLE gambar_wisata AUTO_INCREMENT =  $max1");
        
         if ($jenisumkm == 'Produk') {
            DB::table('produk')->insert([
                'jenis_produk'=>$request->input('jenisproduk'),
                'nama_produk'=>$request->input('inputnamaproduk'),
                'harga'=>$request->input('inputhargaproduk'),
                'deskripsi_produk'=>strip_tags($request->input('inputdeskripsiproduk')),
                'gambar_produk'=>$request->file('inputgambarproduk')->store('produk-images', 'public'),
                'kontak_penjual'=>$request->input('inputkontakpenjual'),
                "created_at"=> $tglinsert,
                "updated_at"=> $tglinsert
            ]);
         } else if ($jenisumkm == 'Jasa') {
                DB::table('jasa')->insert([
                    'nama_jasa'=>$request->input('inputnamajasa'),
                    'deskripsi_jasa'=>$request->input('inputdeskripsijasa'),
                    'kontak_penyedia_jasa'=>$request->input('inputkontakpenyedia'),
                    'gambar_jasa'=>$request->file('inputgambarjasa')->store('jasa-images', 'public'),
                    "created_at"=> $tglinsert,
                    "updated_at"=> $tglinsert
                ]);
         } else if ($jenisumkm == 'Wisata') {
            DB::table('wisata')->insert([
                'nama_wisata'=>$request->input('inputnamawisata'),
                'deskripsi_wisata'=>$request->input('inputdeskripsiwisata'),
                'tarif'=>$request->input('inputtarif'),
                'titik_lokasi'=>$request->input('inputlokasi'),
                "created_at"=> $tglinsert,
                "updated_at"=> $tglinsert
            ]);
            DB::table('gambar_wisata')->insert([
                'id_wisata'=>'id',
                'galeri_jasa'=>$request->file('inputgambarwisata')->store('wisata-images', 'public')
            ]);
        }
         
         return redirect()->route('dataumkm');

    
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
    public function edit(Request $request,$id)
    {
        $jenisumkm = $request->input('b-edit');

        $tampil = DB::table($jenisumkm)->where('id',$id)->get();                        

        return view('edit_data_umkm')->with('dataumkm',$tampil)->with('jenisumkm',$jenisumkm);

        // dd($tampil); 
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
        $jenisumkm =$request->input('b-edit');
  
        $tglupdate =  date('Y-m-d H:i:s');
       
    
         if ($jenisumkm == 'produk') {
            DB::table('produk')->where('id',$id)->update([
                'jenis_produk'=>$request->input('jenisproduk'),
                'nama_produk'=>$request->input('inputnamaproduk'),
                'harga'=>$request->input('inputhargaproduk'),
                'deskripsi_produk'=>$request->input('inputdeskripsiproduk'),
                'gambar_produk'=>$request->file('inputgambarproduk')->store('produk-images', 'public'),
                'kontak_penjual'=>$request->input('inputkontakpenjual'),
                "updated_at"=> $tglupdate
            ]);
         } else if ($jenisumkm == 'jasa') {
                DB::table('jasa')->where('id',$id)->update([
                    'nama_jasa'=>$request->input('inputnamajasa'),
                    'deskripsi_jasa'=>$request->input('inputdeskripsijasa'),
                    'kontak_penyedia_jasa'=>$request->input('inputkontakpenyedia'),
                    'gambar_jasa'=>$request->file('inputgambarjasa')->store('jasa-images', 'public'),
                    "updated_at"=> $tglupdate
                ]);
         } else if ($jenisumkm == 'wisata') {
            DB::table('wisata')->where('id',$id)->update([
                'nama_wisata'=>$request->input('inputnamawisata'),
                'deskripsi_wisata'=>$request->input('inputdeskripsiwisata'),
                'tarif'=>$request->input('inputtarif'),
                'titik_lokasi'=>$request->input('inputlokasi'),
                "updated_at"=> $tglupdate
            ]);
            DB::table('gambar_wisata')->where('id',$id)->update([
                'galeri_jasa'=>$request->file('inputgambarwisata')->store('wisata-images', 'public'),
            ]);
        }
         
         return redirect()->route('dataumkm');

        // dd($request->input('b-edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $jenisumkm =$request->input('b-delete');
           
        DB::table($jenisumkm)->where('id',$id)->delete();
        DB::table('gambar_wisata')->where('id',$id)->delete();
         
        return redirect()->route('dataumkm');

    }

}
