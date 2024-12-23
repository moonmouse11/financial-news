<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'path',
        'article_id'
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}