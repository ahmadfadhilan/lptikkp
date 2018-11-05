<?php

namespace App\Http\Controllers;

use App\Bangunan;
use Illuminate\Http\Request;

class BangunansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bangunan = Bangunan::all();
        return view('backend.auth.bangunan.index', compact('bangunan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bangunan = Bangunan::all();
      return view('backend.auth.bangunan.create', compact('bangunan'));
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

          'name'=> 'required',
          'tahun_bangun'=> 'required',
          'jumlah_lantai'=> 'required',
          'luas'=> 'required'

        ]);

         $bangunan = new Bangunan();

         $bangunan->name = $request->input('name');
         $bangunan->tahun_bangun = $request->input('tahun_bangun');
         $bangunan->jumlah_lantai = $request->input('jumlah_lantai');
         $bangunan->luas = $request->input('luas');

         $bangunan->save();

         return redirect()->route('bangunan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function show(Bangunan $bangunan)
    {
        $bangunan = Bangunan::find($bangunan->id);

        return view('backend.auth.bangunan.show',compact('bangunan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bangunan $bangunan)
    {
      $bangunan = Bangunan::find($bangunan->id);
      return view('backend.auth.bangunan.edit',['bangunan'=> $bangunan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bangunan $bangunan)
    {
      $bangunanUpdate = Bangunan :: where ('id', $bangunan->id)
      ->update([
          'name'=>$request->input('name'),
          'tahun_bangun' => $request->input('tahun_bangun'),
          'jumlah_lantai' => $request->input('jumlah_lantai'),
          'luas' => $request->input('luas')
      ]);

      if($bangunanUpdate){
          return redirect()->route('bangunan.show',['bangunan'=>$bangunan->id])
          ->with('success','Data bangunan terupdate');
      }
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bangunan  $bangunan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bangunan = Bangunan::find($id);
      $bangunan->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('bangunan.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
