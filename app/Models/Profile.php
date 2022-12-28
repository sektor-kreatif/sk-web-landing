<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profile';
    protected $primaryKey = 'profile_id';
    protected $fillable = ['company_name', 'company_email', 'company_phone', 'company_logo', 'company_address', 'company_description'];
    public $incrementing = false;
}
