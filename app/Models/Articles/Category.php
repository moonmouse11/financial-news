<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'slug',
        'description',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }
}