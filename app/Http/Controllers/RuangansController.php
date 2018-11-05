<?php

namespace App\Http\Controllers;

use App\Ruangan;
use App\Bangunan;
use Illuminate\Http\Request;

class RuangansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ruangan = Ruangan::all();
      return view('backend.auth.ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $ruangan = Ruangan::all();
      $bangunan = Bangunan::select('id', 'name')->pluck('name', 'id')->sortBy('name');
      return view('backend.auth.ruangan.create', compact('bangunan','ruangan'));
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
          'bangunan_id'=> 'required',
          'luas_ruangan'=> 'required',
          'lantai'=> 'required',
          'peruntukkan'=> 'required',
          'kapasitas'=> 'required'

        ]);

         $ruangan = new Ruangan();

         $ruangan->name = $request->input('name');
         $ruangan->bangunan_id = $request->input('bangunan_id');
         $ruangan->luas_ruangan = $request->input('luas_ruangan');
         $ruangan->lantai = $request->input('lantai');
         $ruangan->peruntukkan = $request->input('peruntukkan');
         $ruangan->kapasitas = $request->input('kapasitas');

         $ruangan->save();

         return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
      $ruangan = Ruangan::find($ruangan->id);
      $bangunan = Bangunan::select('id', 'name')->pluck('name', 'id')->sortBy('name');
      return view('backend.auth.ruangan.show',compact('ruangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
      $ruangan = Ruangan::find($ruangan->id);
      $bangunan = Bangunan::select('id', 'name')->pluck('name', 'id')->sortBy('name');
      return view('backend.auth.ruangan.edit',['ruangan'=> $ruangan], compact('bangunan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
      $ruanganUpdate = Ruangan :: where ('id', $ruangan->id)
      ->update([
          'name'=>$request->input('name'),
          'bangunan_id' => $request->input('bangunan_id'),
          'luas_ruangan' => $request->input('luas_ruangan'),
          'lantai' => $request->input('lantai'),
          'peruntukkan' => $request->input('peruntukkan'),
          'kapasitas' => $request->input('kapasitas')
      ]);

      if($ruanganUpdate){
          return redirect()->route('ruangan.show',['ruangan'=>$ruangan->id])
          ->with('success','Data ruangan terupdate');
      }
      return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $ruangan = Ruangan::find($id);
      $ruangan->delete();

      //toast()->success('Data bangunan berhasil dihapus');

      return redirect()->route('ruangan.index')->with(['message'=> 'Successfully deleted!!']);
    }
}
