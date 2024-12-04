<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function keperluan()
    {
        return $this->belongsTo(Keperluan::class, 'keperluan_id'); // Pastikan nama relasi dan nama kolom sesuai
    }

}
