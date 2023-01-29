<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;

    protected $table = 'lokers',
              $guarded = ['id'];

    public function perusahaan() {
        return $this->belongsTo(Perusahaan::class);
    }
}
