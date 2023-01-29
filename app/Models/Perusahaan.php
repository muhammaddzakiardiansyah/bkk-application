<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaans',
              $guarded = ['id'];

    public function loker() {
        return $this->hasMany(Loker::class);
    }
}
