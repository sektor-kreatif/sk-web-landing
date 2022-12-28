<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $primaryKey = 'article_id';
    protected $fillable = ['article_id','title', 'content', 'status', 'category_id', 'published_at', 'expired_at'];
    public $incrementing = false;

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
