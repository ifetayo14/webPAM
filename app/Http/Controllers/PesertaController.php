<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\User;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPeserta = Peserta::all();
        return view('dataPeserta', compact('dataPeserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPeserta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $peserta = new Peserta([
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'prodi' => $request->get('prodi')
        ]);

        $user = new User([
            'username' => $request->get('nim'),
            'password' => $request->get('password'),
            'role' => $request->get('role')
        ]);

        $peserta->save();
        $user->save();


        return redirect('/dataPeserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        return view('editPeserta', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        $this->validate($request, [
            'nama' => 'required',
            'prodi' => 'required'
        ]);

        $peserta->update([
            'nama' => $request->nama,
            'prodi' => $request->prodi
        ]);

        return redirect('/dataPeserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        Peserta::destroy($peserta -> id);
        return redirect('/dataPeserta');
    }
}
