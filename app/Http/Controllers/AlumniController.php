<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnis = Alumni::latest();

        if(request('search')) {
            $alumnis->where('nama_alumni', 'like', '%' . request('search') . '%')
                    ->orWhere('jurusan', 'like', '%' .request('search') . '%')
                    ->orWhere('thn_lulus', 'like', '%' .request('search') . '%')
                    ->orWhere('status', 'like', '%' .request('search') . '%');
        }
        return view('Dashboard.Alumni.index', [
            'active' => 'alumni',
            'alumnis' => $alumnis->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Alumni.create', [
            'active' => 'Form Alumni'
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
        $rule = [
            'nama_alumni' => 'required',
            'jurusan' => 'required',
            'thn_lulus' => 'required',
            'status' => 'required'
        ];

        $validation = $request->validate($rule);
        Alumni::create($validation);
        return redirect('/alumni')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumni = Alumni::find($id);
        return view('Dashboard.Alumni.show', ['active' => 'Lihat Detail'])->with('alumni', $alumni);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
