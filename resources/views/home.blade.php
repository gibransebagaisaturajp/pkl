@extends('adminbackend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <center>
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                    <p>You're login!</p>
                    {{-- @gueat

                    @role('admin')
                    }}
                    @endguest
                    @endrole --}}
                    </center>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection