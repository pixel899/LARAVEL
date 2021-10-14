<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(Categories::class);
    }
    public function childrenCategories()
    {
        return $this->hasMany(Categories::class)->with('categories');
    }

    protected $fillable = ['name', 'parent_id'];

}
