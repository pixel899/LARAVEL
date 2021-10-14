<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsANDTags extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'news_and_tags';


    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
