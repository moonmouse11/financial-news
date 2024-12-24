<?php

namespace App\Models\Articles;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'body',
        'slug',
        'image',
        'complexity_id',
        'category_id',
        'author_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function tags()
    {
        return $this->hasMany(ArticleTags::class);
    }

    public function complexity()
    {
        return $this->belongsTo(Complexity::class);
    }

    public function photos()
    {
        $this->hasMany(Photo::class);
    }

    public function category()
    {
        $this->belongsTo(Category::class);
    }

    public function author()
    {
        $this->belongsTo(User::class);
    }
}