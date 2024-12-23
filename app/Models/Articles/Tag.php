<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'updated_at',
        'created_at'
    ];

    public function articles()
    {
        return $this->hasMany(ArticleTags::class);
    }

}