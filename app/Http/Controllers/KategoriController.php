<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\kategori;
use Session;
use Auth;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori::orderBy('created_at', 'desc')->get();
        return view('admin.kategori.index', compact('kategori'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('admin.kategori.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama, '-');
        $kategori->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan kategori <b>$kategori->nama</b>!"
        ]);
        return redirect()->route('kategori.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
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
        //
        $request->validate([
            'nama' => 'required',
        ]);
        $kategori = kategori::findOrFail($id);
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama, '-');
        $kategori->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah menjadi kategori <b>$kategori->nama</b>!"
        ]);
        return redirect()->route('kategori.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $old = $kategori->nama;
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
