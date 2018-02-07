<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anabaslik extends Model
{
    protected $table    = 'ana_basliklar';
    protected $fillable = ['baslik', 'slug', 'kisa_aciklama'];

    public function forumkonu(){
        // Ana baslıgın birden cok konusu olabilir
        return $this->hasMany('App\ForumKonu', 'ana_baslik', 'id');
    }
}
