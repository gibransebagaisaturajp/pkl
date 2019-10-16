<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\kategori;
use App\tag;
use App\Gallery;
use Session;
use Auth;
use File;
use DB;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        // $galllery = DB::table('gallleries')->select('*');
        // return datatables()->of($galllery)
        //     ->make(true);
        $gallery = Gallery::orderBy('created_at', 'desc')->get();
        return view('admin.gallery.index', compact('gallery'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        $tag = tag::all();
        // dd($tag);
        return view('admin.gallery.create', compact('kategori', 'tag'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
              'konten' => 'required',
              'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
              'nama' => 'required',
              'tag' => 'required'
         ]);
        $gallery = new Gallery();
        $gallery->judul = $request->judul;
        $gallery->slug = Str::slug($request->judul, '-');
        $gallery->konten = $request->konten;
        $gallery->id_user = Auth::user()->id;
        $gallery->id_kategori = $request->nama;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/gallery';
            $filename = $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $gallery->foto = $filename;
        }
        $gallery->save();
        $gallery->tag()->attach($request->tag);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan <b>"
                . $gallery->judul . "</b>"
        ]);
        return redirect()->route('gallery.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.show', compact('gallery'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $kategori = kategori::all();
        $tag = tag::all();
        $select = $gallery->tag->pluck('id')->toArray();
        return view('admin.gallery.edit', compact('gallery', 'kategori', 'select', 'tag'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->judul = $request->judul;
        $gallery->slug = Str::slug($request->judul, '-');
        $gallery->konten = $request->konten;
        $gallery->id_user = Auth::user()->id;
        $gallery->id_kategori = $request->nama;
        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/gallery';
            $filename = $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
            // hapus foto lama jika ada
            if ($gallery->foto) {
                $old_foto = $gallery->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $gallery->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $gallery->foto = $filename;
        }
        $gallery->save();
        $gallery->tag()->sync($request->tag);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil edit <b>"
                . $gallery->judul . "</b>"
        ]);
        return redirect()->route('gallery.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $blog = Gallery::findOrfail($id);
        if ($gallery->foto) {
            $old_foto = $gallery->foto;
            $filepath = public_path()
                . '/assets/img/gallery/' . $gallery->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        $gallery->tag()->detach($gallery->id);
        $gallery->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus <b>"
                . $blog->judul . "</b>"
        ]);
        return redirect()->route('gallery.index');
    }
}