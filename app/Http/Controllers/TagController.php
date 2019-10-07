<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\tag;
use Session;
use Auth;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = tag::orderBy('created_at', 'desc')->get();
        return view('admin.tag.index', compact('tag'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = tag::all();
        return view('admin.tag.create', compact('tag'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new tag();
        $tag->nama = $request->nama;
        $tag->slug = Str::slug($request->nama, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan tag bernama <b>$tag->nama</b>!"
        ]);
        return redirect()->route('tag.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = tag::findOrFail($id);
        return view('admin.tag.show', compact('tag'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = tag::findOrFail($id);
        return view('admin.tag.edit', compact('tag'));
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
        $request->validate([
            'nama' => 'required',
        ]);
        $tag = tag::findOrFail($id);
        $tag->nama = $request->nama;
        $tag->slug = Str::slug($request->nama, '-');
        $tag->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah tag menjadi <b>$tag->nama</b>!"
        ]);
        return redirect()->route('tag.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
