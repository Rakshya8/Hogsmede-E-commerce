<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["category", "first_name", "last_name", "name", "price","image","description"];
        /**
     * Returns the relationship between this and GameProduct model.
     */
    public function gameProduct()
    {
        return $this->hasOne(GameProduct::class);
    }

    /**
     * Returns the relationship between this and CdProduct model.
     */
    public function cdProduct()
    {
        return $this->hasOne(CdProduct::class);
    }

    /**
     * Returns the relationship between this and BookProduct model.
     */
    public function bookProduct()
    {
        return $this->hasOne(BookProduct::class);
    }

    /**
     * Query Scope for Product class
     */
    public function scopeFilter($query, array $filter){
         if($filter['search'] ?? false){
                $query->where('name','like','%'.request('search').'%');                
            }
            if($filter['category']??false){
                $query->where('category',$filter['category']);
            }



    }
}
