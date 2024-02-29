<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'price',
        'discount',
        'tag',
        'name',
        'description',
        'category_id',
    ];

    /**
     * Get the category associeted with the Item.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all images of an item.
     */
    public function images()
    {
        return $this->hasMany(ItemImage::class);
    }
}
