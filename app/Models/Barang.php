<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='list';
    public function units()
    {
        return $this->belongsTo(Unit::class,'unit_id','id');
    }

}
