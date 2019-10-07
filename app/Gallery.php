<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'judul', 'slug', 'foto',
        'konten', 'id_user', 'id_kategori'
    ];
    public $timestamps = true;
    public function kategori()
    {
        return $this->belongsTo('App\kategori', 'id_kategori');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
    public function tag()
    {
        return $this->belongsToMany('App\tag','gallery_tag','id_gallery','id_tag');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}