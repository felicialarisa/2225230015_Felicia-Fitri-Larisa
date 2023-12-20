<?php

namespace App\Http\Controllers;

use App\Models\felicia;
use Illuminate\Http\Request;
use illuminate\support\facades\session;
use Psy\CodeCleaner\FunctionContexPass;

class felicia22 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=felicia::all();
       return view('isian.tampildata')-> with( 'data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('isian.uas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'Nama'=> 'required',
            'NIM'=> 'required',
            'Jurusan'=> 'required',
            'Kelas'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Jurusan'=> $request->input('Jurusan'),
            'Kelas'=> $request->input('Kelas')
        ];
        felicia::create($data);
        return redirect('isian');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data= felicia::where('nama',$id)->first();
        return view('isian.edit')-> with('data',$data);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'Nama'=> 'required',
            'NIM'=> 'required',
            'Jurusan'=> 'required',
            'Kelas'=> 'required'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Jurusan'=> $request->input('Jurusan'),
            'Kelas'=> $request->input('Kelas')
        ];
        felicia::where('Nama',$id)-> update($data);
        return redirect('isian')-> with('success','Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        felicia::where('Nama',$id)->delete();
        return redirect('isian')-> with('success','Data Berhasil Di Hapus!');
    }
}
