<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    
    protected $fillable = ['nama','slug'];
    public $timestamps = true;
    public function Gallery()
    {
        return $this->belongsToMany('App\Gallery','gallery','id_tag','id_gallery');
    }
    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($tag) {
    //         // mengecek apakah penulis masih punya buku
    //         if ($tag->gallery->count() > 0) {
    //             //menyiapkan pesan error
    //             $html = 'tag tidak bisa dihapus karena masih digunakan oleh gallery: ';
    //             $html .= '<ul>';
    //             foreach ($tag->gallery as $data) {
    //                 $html .= "<li>$data->judul<li>";
    //             }
    //             $html .= '<ul>';
    //             Session::flash("flash_notification", [
    //                 "level" => "danger",
    //                 "message" => $html
    //             ]);
    //             //membatalkan proses penghapusan
    //             return false;
    //         }
    //     });
    // }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
