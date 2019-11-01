@extends('adminbackend')

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">
                        <i class="zmdi zmdi-badge-check zmdi-hc-fw"></i>
                        {{ $gallery->judul}} .
                        <b> {{ $gallery->user->name }} </b>
                    </h5>
                    <div class="card-body">
                    <img src="{{ asset('assets/img/gallery/'.$gallery->foto.'')}}"
                    style="width:250px;" class="float-left rounded m-r-30 m-b-30">
                    <p>{!! $gallery->konten !!}</p>
                    <p>
                        Kategori :
                        <button class="btn btn-sm btn-rounded btn-info">
                            {{ $gallery->kategori->nama }}
                        </button>
                    </p>
                    <p> Tag :
                        @foreach($gallery->tag as $data)
                        <button class="btn btn-sm btn-rounded btn-success">
                        {{ $data->nama }}
                        </button>
                        @endforeach
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>
                        Tanggal : {{ $gallery->created_at->format('d M Y, H:i') }} WIB
                    </p>
                    <br>
                    <p>
                        <a href="{{ url('/admin/gallery') }}"
                        class="btn btn-outline btn-block btn-rounded btn-info">
                            <i class="la la-paper-plane"></i>Lihat gallery <i
                            class="zmdi zmdi-airplane zmdi-hc-fw"></i>
                        </a>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection