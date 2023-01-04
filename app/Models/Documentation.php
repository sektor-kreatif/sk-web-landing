<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    use HasFactory;

    protected $table = 'documentation';
    protected $primaryKey = 'doc_id';
    protected $fillable = ['doc_id', 'title', 'media', 'type', 'description'];
    public $incrementing = false;
}
