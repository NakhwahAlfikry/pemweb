<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageImage extends Model
{
    use HasFactory;
    protected $table = 'page_images';
    protected $fillable = [
        'image_one',
    ];
}
