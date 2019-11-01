@extends('adminbackend')

{{-- @section('css')
        <link rel="stylesheet" href="{{asset('DataTable/dt/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('DataTable/dt/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('DataTable/dt/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('DataTable/dt/js/components/datatables-init.js')}}"></script>
@endsection --}}

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Gallery</h5><br>
                <center>
                        <a href="{{ route('gallery.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                {{-- <th>Pembuat</th> --}}
                                <th>Foto</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gallery as $data)
                            <tr>
                                <td>{{$data->judul}}</td>
                                <td>{{$data->slug}}</td>
                                <td>{{$data->kategori->nama}}</td>
                                {{-- <td>{{$data->user->name}}</td> --}}
                                <td>
                                @foreach ($data->tag as $key)
                                    <li>{{ $key->nama }}</li>
                                @endforeach
                                </td>
                                <td><img src="{{asset('assets/img/gallery/' .$data->foto. '')}}"
                                    style="width:250px; height:250px;" alt="Foto"></td>

								<td style="text-align: center;">
                                    <form action="{{route('gallery.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('gallery.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('gallery.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
                                    </a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete  btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
									</form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection