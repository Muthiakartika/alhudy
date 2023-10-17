<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'kelasId',
        'nisn',
        'namaAyah',
        'namaIbu',
        'noHp'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }
}
