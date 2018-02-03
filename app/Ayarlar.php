<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    protected $table    = 'ayarlar';
    protected $fillable = ['logo', 'url', 'title', 'description', 'keywords', 'author', 'tel', 'gsm', 'fax', 'mail', 'adres','il', 'ilce', 'recaptcha', 'maps', 'analytics', 'facebook', 'twitter', 'instagram', 'youtube', 'google', 'smtp_user', 'smtp_password', 'smtp_host', 'smtp_port']; 

}