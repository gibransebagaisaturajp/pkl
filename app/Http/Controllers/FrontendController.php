<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\kategori;
use App\tag;
use App\User;
class FrontendController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('frontend.welcome', compact('gallery'));
    }
    //  public function singleblog(Gallery $gallery)
    // {
    //   $gallery = Gallery::findOrFail($id);
    //     return view('frontend.singleblog');
    // }
    public function blogkategori(Kategori $kategori)
    {
        return view('frontend.category');
    }
    public function blogtag(Tag $tag)
    {
        return view('frontend.category');
    }
    public function ShowDetail($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('frontend.singleblog', compact('gallery'));
    }
//     public function singlepost(galley $gallery){
//     $berita = Gallery::all();
//     $kategori = kategori::all();
//     $tag = tag::all();
// 		return view('single-post-games',compact('berita','tag','kategori'));
// 	}
// 	public function index(){
//     $kategori=kategori::all();
//     $tag=tag::all();
// 		return view('welcome',compact('kategori','tag'));
// 	}
//   public function blogkategori(kategori $kategori){
//     return view('blog-kategori');
//   }
//   public function archive(){
//     return view('archive');
//   }
// //   public function blog(){
// //     return view('blog');
// //   }
//   public function category(){
//     return view('category');
//   }

  public function berita(){
   $gallery = Gallery::select('galleries.judul',
                  'galleries.slug',
                  'users.name as author',
                  'foto')
                  ->join('users','users.id','=','galleries.id_user')
                  ->get();
   $kategori = kategori::all();
   $detail = Gallery::select('galleries.judul',
   							 'galleries.konten',
   							 'foto',
   							 'kategoris.nama as kategori',
   							 'users.name as author')
   							 ->join('users','users.id','=','galleries.id_user')
   							 ->join('kategoris','kategoris.id','=','galleries.id_kategori')
   							 ->get();
    $tag = tag::all();
    $response = [
   		'success' => true,
    		'data' => [
    			'gallery'=> $gallery, 
    			'kategori' => $kategori,
    			'tag' => $tag,
    			'detail' => $detail
    		],
   		'message' => "Berhasil"
    ];
    return response()->json($response, 200);
	}
}