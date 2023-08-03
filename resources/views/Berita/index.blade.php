@extends('Layout.main')

@section('title', 'Berita')

@section('container')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Tables Berita</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Berita</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <div>
                    <a href="{{ route('berita.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data</button></a>
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
                    @forelse ($berita as $berita)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->isi_berita }}</td>
                        <td>{{ $berita->created_at }}</td>
                        <td>{{ $berita->gambar_berita }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm fas fa-edit">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection