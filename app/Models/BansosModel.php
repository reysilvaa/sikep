<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BansosModel extends Model
{
    use HasFactory;
    protected $table = 'bansos';
    public $timestamps = false;
    protected $primaryKey = 'bansos_kode';

    protected $fillable = [
        'bansos_kode',
        'bansos_nama',
        'keterangan',
    ];
    public function mightGets():HasMany
    {
        return $this->hasMany(MightGet::class, 'bansos_kode', 'bansos_kode');
    }
}