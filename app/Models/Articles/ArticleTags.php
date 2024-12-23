<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;

class ArticleTags extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $table = 'articles_tags';
    protected $fillable = [
        'article_id',
        'tag_id',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
