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
        'nik',
        'tempat',
        'tglLahir',
        'umur',
        'alamat',
        'noHp',
        'status',
        'gender',
        'kebKhusus',
        'disabilitas',
        'kip',
        'namaAyah',
        'namaIbu',
        'namaWali'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelasId');
    }
}
