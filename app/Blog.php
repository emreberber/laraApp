<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table    = 'bloglar';
    protected $fillable = ['baslik', 'icerik', 'kisaicerik', 'slug', 'yazar', 'etiketler'];
}
