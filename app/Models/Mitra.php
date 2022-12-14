<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    protected $table = 'mitra';
    protected $primaryKey = 'mitra_id';
    protected $fillable = ['mitra_id', 'name', 'logo', 'desc'];
    public $incrementing = false;
}
