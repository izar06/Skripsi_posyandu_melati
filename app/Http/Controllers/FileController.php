<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dokument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Psy\Readline\Hoa\FileException;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokument::all();
        return view('dokumen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokumen.create');
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
            'file'=> 'file|required',
            'nama'=> 'required',
            'deskripsi'=> 'required'
        ]);
        if($request->file('file')){
            $data['file'] = $request->file('file')->store('file-posyandu04');
        }

        Dokument::create($data);
        return redirect('/dashboard/dokumen')->with('success', 'File Posyandu Sudah Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dokument::findOrFail($id);
        return view('dokumen.edit', compact('data'));
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
            'file'=> 'file|required',
            'nama'=> 'required',
            'deskripsi'=> 'required'
        ]);
        $item = Dokument::findOrFail($id);

        if($request->file('file')){
            if($request->oldFile){
                    Storage::delete($request->oldFile);
                }
            $data['file'] = $request->file('file')->store('file-posyandu04');
        }

        $item->update($data);
        return redirect('/dashboard/dokumen')->with('success', 'File Posyandu Sudah Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Dokument::findOrFail($id);

        $item->delete();
        return redirect('/dashboard/dokumen')->with('danger', 'File Posyandu Berhasil di Hapus');
    }

    public function download($id)
    {
        $data = Dokument::findOrFail($id);
        $filepath = storage_path("app/public/{$data->file}");
        return response()->download($filepath);
    }

    public function view($id)
    {
        $data = Dokument::find($id);

        return view('dokumen.view',compact('data'));
    }
}
