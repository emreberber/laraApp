<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumKonu extends Model
{
    protected $table    = 'forum_konular';
    protected $fillable = ['baslik', 'yazar', 'icerik', 'slug', 'etiketler', 'ana_baslik'];

    public function ana_baslik(){
        return $this->hasOne('App\Anabaslik', 'id', 'ana_baslik');
    }
}
