<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class PageAdminController extends Controller
{
    public function index()
    {
        return view('PageAdmin.index', [
            'active' => 'Dashboard Admin'
        ]);
    }

    public function alumni()
    {
        $alumnis = Alumni::latest();
        if (request('search')) {
            $alumnis->where('nama_alumni', 'like', '%' . request('search') . '%')
                ->where('jurusan', 'like', '%' . request('search') . '%')
                ->where('thn_lulus', 'like', '%' . request('search') . '%')
                ->where('status', 'like', '%' . request('search') . '%');
        }
        return view('PageAdmin.alumni', [
            'active' => 'Dashboard Alumni',
            'alumnis' => $alumnis->get()
        ]);
    }
}
