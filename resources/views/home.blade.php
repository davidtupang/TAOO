@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>My name: {{Auth::user()->name}}</p>
                    <p>My Email: {{Auth::user()->email}}</p>
                    <p>My Number: {{Auth::user()->number}}</p>
                    <img alt="{{Auth::user()->name}}" src="{{Auth::user()->image}}"/>

                    <p><center>{{ __('You are logged in!') }}</p></center>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
<div class="card mb-3" style="margin-top: 50px">
  <div class="row g-0">
    <div class="col-md-4">
      <center><img src="/Image/logo.jpg" width="100" height="100" style="margin-top: 50px"></center>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">TAOO</h5>
        <p class="card-text">Aplikasi ini ditujukan untuk mempermudah wisatawan di kawasan danau toba
            mendapatkan akses dan informasi berupa destinasi wisata,informasi kegiatan wisata (
            berupa festival,atraksi dan paket wisata ),informasi homestay,informasi kuliner,informasi
            oleh oleh,informasi transportasi,informasi tempat umum dan melakukan transaksi
            didalamnya berupa pembelian paket wisata,ticket masuk objek wisata,membeli oleh oleh
            dan rental transportasi wisata dan lainnya.</p>
        <p class="card-text"><small class="text-muted"></small></p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
    