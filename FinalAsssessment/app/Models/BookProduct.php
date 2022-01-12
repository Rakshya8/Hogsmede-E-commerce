<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookProduct extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["product_id", "pages"];

    /**
     * Returns the relationship between this and Product model.
     */
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
