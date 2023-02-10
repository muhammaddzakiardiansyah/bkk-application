<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis',
              $guarded = ['id'];

    // public function scopeFilter($query, array $filters) {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('nama_alumni', 'like', '%' . $search . '%')
    //                      ->orWhere('jurusan', 'like', '%' . $search . '%')
    //                      ->orWhere('thn_lulus', 'like', '%' . $search . '%')
    //                      ->orWhere('status', 'like', '%' . $search . '%');
    //     });
    // }
}
