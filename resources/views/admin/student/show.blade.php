@extends('layout.admin')

@section('title', 'Detail Siswa')

@section('content')

{{-- (Request 1) Card akan otomatis mendapat style 'melayang' --}}
<div class="card">
    <div class="card-body">
        
        {{-- (Request 2) Ganti 'table-bordered' menjadi 'table-striped' --}}
        {{-- 'table-detail' adalah class custom baru untuk styling --}}
        <table class="table table-striped table-detail">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $student->id }}</td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>{{ $student->nis }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $student->nama_lengkap }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $student->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>NISN</th>
                    <td>{{ $student->nisn }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Beri sedikit margin antar tombol --}}
        <a href="{{ route('admin.students.index') }}" class="btn btn-secondary me-2">Kembali</a>
        <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
        
    </div>
</div>

@endsection

{{-- (Request 3) Push style custom untuk halaman ini --}}
@push('scripts')
<style>
    /* Buat header tabel (th) jadi pink dan lebarnya pas */
    .table-detail th {
        width: 25%;
        color: #EC4899; /* Warna pink primer kita */
        font-weight: 600;
    }

    /* Buat tombol 'Kembali' jadi soft-gray */
    .btn-secondary {
        background-color: #F4F7FC;
        border: 1px solid #EBF2F9;
        color: #333;
    }
    .btn-secondary:hover {
        background-color: #EBF2F9;
        border-color: #EBF2F9;
        color: #333;
    }
</style>
@endpush