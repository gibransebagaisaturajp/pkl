@extends('adminbackend')
@section('css')
      <link rel="stylesheet" href="{{asset('select2/dist/css/select2.min.css')}}">
@endsection

@section('js')
     <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
    <script>
        CKEDITOR.replace( 'ck' );
    </script>
    <script>
        $(document).ready(function () {
            $('#select2').select2();
        })
    </script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Gallery</div>
                <div class="card-body">
                    <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <input class="form-control" value="{{ $gallery->judul }}" type="text" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label><br>
                            <img src="{{ asset('assets/img/gallery/'.$gallery->foto) }}" alt="" height="250px" width="250px">
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                                <select name="nama" class="form-control">
                                @foreach($kategori as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $gallery->kategori->id ==
                                            $data->id ? 'selected="selected"' : '' }}>
                                        {{ $data->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tags</label>
                                <select class="form-control" name="tag[]" id="select2" multiple>
                                    @foreach ($tag as $data)
                                        <option value="{{ $data->id }}" {{ (in_array($data->id, $select)) ? 'selected="selected"' : '' }}>
                                            {{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea class="form-control" id="ck" rows="8" cols="30" type="text" name="konten">{{ $gallery->konten }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                        </div>
                        <div class="form-group">
                            <a href="{{ url('gallery') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection