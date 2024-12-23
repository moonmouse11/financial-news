<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complexity extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
    ];

    public function article()
    {
        return $this->hasMany(Article::class);
    }
}