<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    protected $table = 'testimony';
    protected $primaryKey = 'testimony_id';
    protected $fillable = ['testimony_id', 'text', 'username'];
    public $incrementing = false;
}
