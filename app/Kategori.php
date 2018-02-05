<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table    = 'kategoriler';
    protected $fillable = ['ad', 'ust_kategori', 'slug'];

    public function parent(){
        return $this->belongsTo('App\Kategori', 'ust_kategori');
    }

    public function children(){
        // 1den coga
        return $this->hasMany('App\Kategori', 'ust_kategori');
    }

    public function bloglar(){
        // kategori iliskilendirmek istedigimiz tablo.İd ise suanki Kategori tablosundaki id
        return $this->hasMany('App\Blog', 'kategori', 'id');
    }
}
