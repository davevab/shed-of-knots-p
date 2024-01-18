<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'slug',
        'image',
        'description',
        'price',
        'active',
        'published_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

//    public function Image()
//    {
//        if (str_starts_with($this->Image(), 'http')) {
//            return $this->Image();
//        }
//
//        return '/storage/'.$this->Image();
//    }


}
