@extends('Layout/main')

@section('title', 'Monografi')

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
        <a class="nav-link" href="berita">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>
    <!-- Nav Item - Artikel -->
    <li class="nav-item">
        <a class="nav-link" href="artikel">
            <i class="fas fa-fw fa-book"></i>
            <span>Artikel</span></a>
    </li>
    <!-- Nav Item - Monografi Hukum< -->
    <li class="nav-item">
        <a class="nav-link" href="monografi">
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
<h1 class="h3 mb-2 text-gray-800">Data Tables Monografi Hukum</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Monografi Hukum</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div>
                    <a href="{{ route('monografi.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button></a>
                </div>
                <br>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Publish</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Publish</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @forelse ($monografi as $monografi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->isi_berita }}</td>
                        <td>{{ $berita->created_at }}</td>
                        <td class="text-center">
                            <img src="{{ Storage::url('public/image/'.$berita->gambar_berita) }}" class="rounded" style="width: 100px">
                        </td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Berita belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection