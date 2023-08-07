@extends('Layout.main')

@section('title', 'Edit Data Berita')

@section('sedibar')
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JDIH <sup>Kota Batu</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fitur - Fitur
    </div>

    <!-- Nav Item - SIBAHUKAMIL -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-hammer"></i>
            <span>SIBAHUKAMIL</span></a>
    </li>

    <!-- Nav Item - SmartKUM -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-paper-plane"></i>
            <span>SmartKUM</span></a>
    </li>
    <!-- Nav Item - Konsultasi Online -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-comments"></i>
            <span>Konsultasi Online</span></a>
    </li>
    <!-- Nav Item - Kepuasan Pengguna -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Kepuasan Pengguna</span></a>
    </li>
    <!-- Nav Item - Berita -->
    <li class="nav-item">
        <a class="nav-link" href="/berita">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <!-- Nav Item - Artikel -->
    <li class="nav-item">
        <a class="nav-link" href="/artikel">
            <i class="fas fa-fw fa-book"></i>
            <span>Artikel</span></a>
    </li>
    <!-- Nav Item - Monografi Hukum< -->
    <li class="nav-item">
        <a class="nav-link" href="/monografi">
            <i class="fas fa-fas fa-calendar"></i>
            <span>Monografi Hukum</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
@endsection

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Data Berita</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Berita</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('berita.update', $beritum->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="font-weight-bold">Judul Berita</label>
                <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita', $beritum->judul_berita) }}" placeholder="Masukkan Judul Berita">

                <!-- error message untuk title -->
                @error('judul_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Isi Berita</label>
                <input type="text" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" value="{{ old('isi_berita', $beritum->isi_berita) }}" placeholder="Masukkan Isi Berita">

                <!-- error message untuk title -->
                @error('isi_berita')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Gambar Berita</label>
                <br>
                <img src="{{ Storage::url('public/image/'.$beritum->gambar_berita) }}" class="rounded" style="width: 100px">
                <input type="file" class="form-control" name="gambar_berita">
            </div>

            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>
        </form>

        </body>
    </div>
</div>
@endsection