<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Illuminate\Support\Facades\Storage;

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

        if (request('search')) {
            $alumnis->where('nama_alumni', 'like', '%' . request('search') . '%')
                ->orWhere('jurusan', 'like', '%' . request('search') . '%')
                ->orWhere('thn_lulus', 'like', '%' . request('search') . '%')
                ->orWhere('status', 'like', '%' . request('search') . '%');
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
        $validation = $request->validate([
            'nama_alumni' => 'required',
            'jurusan' => 'required',
            'thn_lulus' => 'required',
            'images' => 'required|file|max:1024',
            'status' => 'required'
        ]);

        if ($request->file('images')) {
            $validation['images'] = $request->file('images')->store('profile-images');
        }

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
        $alumni = Alumni::find($id);
        return view('PageAdmin.createAlumni', ['active' => 'Edit Data'])->with('alumni', $alumni);
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
        $alumni = Alumni::find($id);
        $input = $request->validate([
            'nama_alumni' => 'required',
            'jurusan' => 'required',
            'thn_lulus' => 'required',
            'images' => 'required|file|max:1024',
            'status' => 'required'
        ]);

        if ($request->file('images')) {
            if ($alumni->images) {
                Storage::delete($alumni->images);
            }
            $input['images'] = $request->file('images')->store('profile-images');
        }

        $alumni->update($input);
        return redirect('/pageadmin/alumni')->with('success', 'Berhasil edit data alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        Storage::delete($alumni->images);
        Alumni::destroy($alumni->id);
        return redirect('/pageadmin/alumni')->with('success', 'Data berhasil dihapus!');
    }
}
