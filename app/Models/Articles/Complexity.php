<?php

namespace App\Models\Articles;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Complexity extends Model
{
    use SoftDeletes;

    protected $table = 'complexities';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'updated_at',
        'created_at'
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'complexity_id', 'id');
    }
}