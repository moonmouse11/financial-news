<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
    ];

    public function articles()
    {
        return $this->hasMany(ArticleTags::class);
    }

}