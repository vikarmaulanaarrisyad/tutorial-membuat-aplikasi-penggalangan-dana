@extends('layouts.front')

@section('title', 'DARURAT! Peduli Korban Gempa Banten')

@push('css')
<style>
    .daftar-donasi.nav-pills .nav-link.active, 
    .daftar-donasi.nav-pills .show>.nav-link {
        background: transparent;
        color: var(--dark);
        border-bottom: 3px solid var(--blue);
        border-radius: 0;
    }
</style>
@endpush

@section('content')
{{-- Banner --}}
<div class="banner bg-charity2">
    <div class="container">
        <h2 class="fa-2x text-white">DARURAT! Peduli Korban Gempa Banten</h2>
    </div>
</div>

{{-- Detail --}}
<div class="detail bg-white">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="d-flex align-items-center">
                    <div class="img rounded-circle" style="width: 60px; overflow:hidden;">
                        <img src="{{ asset('AdminLTE/dist/img/user1-128x128.jpg') }}" alt="" class="w-100">
                    </div>
                    <div class="ml-3">
                        <strong class="d-block">Username</strong>
                        <small class="text-muted">20 September 2021</small>
                    </div>
                </div>

                <div class="thumbnail rounded mt-4" style="overflow: hidden">
                    <img src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17affada31b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17affada31b%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22107.1953125%22%20y%3D%2295.5265625%22%3E%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="" class="w-100">
                </div>

                <div class="body mt-4">
                    <h5>Creating Something New</h5>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit similique distinctio quidem blanditiis architecto ullam a itaque quisquam nihil! Unde ducimus deleniti exercitationem minima, molestiae ab saepe libero. Doloribus, a?</p>
                    <p>Magnam amet labore exercitationem maxime consectetur molestias quas quia dicta, praesentium minus illum quis fuga, fugiat velit voluptate sed nostrum ipsam atque.</p>
                    <p>Quaerat voluptas natus velit deleniti reprehenderit vero ad eos ab reiciendis. Libero dignissimos temporibus ipsam sint dolores voluptate consequatur debitis tempora doloremque.</p>

                    <h5>It's time to build your new project</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit similique distinctio quidem blanditiis architecto ullam a itaque quisquam nihil! Unde ducimus deleniti exercitationem minima, molestiae ab saepe libero. Doloribus, a?</p>
                    <p>Magnam amet labore exercitationem maxime consectetur molestias quas quia dicta, praesentium minus illum quis fuga, fugiat velit voluptate sed nostrum ipsam atque</p>

                    <div class="kategori border-top pt-3">
                        <a href="#" class="badge badge-primary p-2 rounded-pill">Korban Banjir</a>
                    </div>

                    <hr class="d-lg-none d-block">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-0">
                    <h1 class="font-weight-bold">Rp. {{ format_uang(300000) }}</h1>
                    <p class="font-weight-bold">Terkumpul dari Rp. {{ format_uang(10000000) }}</p>
                    <div class="progress" style="height: .3rem;">
                        <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-1">
                        <p>7% tercapai</p>
                        <p>3 bulan lagi</p>
                    </div>

                    <div class="donasi mt-2 mb-4">
                        <button class="btn btn-primary btn-lg btn-block">Donasi Sekarang</button>
                    </div>

                    <h4 class="font-weight-bold">Donatur (3)</h4>
                    <ul class="nav nav-pills mb-3 daftar-donasi" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-waktu-tab" data-toggle="pill" href="#pills-waktu"
                                role="tab" aria-controls="pills-waktu" aria-selected="true">Waktu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-jumlah-tab" data-toggle="pill" href="#pills-jumlah"
                                role="tab" aria-controls="pills-jumlah" aria-selected="false">Jumlah</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-waktu" role="tabpanel"
                            aria-labelledby="pills-waktu-tab">
                            @for ($i = 0; $i < 5; $i++)
                            <div @if ($i > 0) class="mt-1" @endif>
                                <p class="font-weight-bold mb-0">User</p>
                                <p class="font-weight-bold mb-0">Rp. {{ format_uang(100000) }}</p>
                                <p class="text-muted mb-0">{{ tanggal_indonesia(date('Y-m-d H:i:s')) }}</p>
                            </div>
                            @endfor
                        </div>
                        <div class="tab-pane fade" id="pills-jumlah" role="tabpanel"
                            aria-labelledby="pills-jumlah-tab">
                            ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection