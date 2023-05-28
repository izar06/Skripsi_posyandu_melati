<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bumil;
use Illuminate\Http\Request;

class BumilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bumil::all();
        return view('bumil.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_ibu' => 'required',
            'NIK' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'masa_kehamilan' => 'required',
            'checkup_ke' => 'required'
        ]);

        Bumil::create($data);
        return redirect('/dashboard/bumil')->with('success', 'Data Ibu Hamil Berhasil di Tambahkan');;
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
        $data = Bumil::findOrFail($id);

        return view('bumil.edit', compact('data'));
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
        $data = $request->validate([
            'nama_ibu' => 'required',
            'NIK' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'masa_kehamilan' => 'required',
            'checkup_ke' => 'required'
        ]);

        $item = Bumil::findOrFail($id);

        $item->update($data);
        return redirect('/dashboard/bumil')->with('info', 'Data Ibu Hamil Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Bumil::findOrFail($id);

        $item->delete();
        return redirect('/dashboard/bumil')->with('danger', 'Data Ibu Hamil Berhasil di Hapus');
    }
}
