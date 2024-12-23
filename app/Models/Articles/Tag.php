<?php

namespace App\Models\Articles;

class Tag
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