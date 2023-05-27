<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id','title','slug','content','is_published','image'];

    protected $casts = [
        "is_published" => "boolean"
    ];

    public function category() :BelongsTo
    {
        return $this->belongsTo(Category::class,"category_id");
    }

    public function tags() :BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
