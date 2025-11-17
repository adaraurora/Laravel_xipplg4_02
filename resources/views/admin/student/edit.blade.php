@extends('layout.admin')
@section('title', 'Edit Data Siswa')

@section('content')

{{-- (Request 2) Bungkus form dengan card --}}
<div class="card">
    <div class="card-body">
        
        <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            {{-- (Request 3) Struktur form BS5 modern --}}
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" name="nis" id="nis" value="{{ $student->nis }}" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $student->nama_lengkap }}" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                {{-- Gunakan .form-select untuk dropdown --}}
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                    <option value="L" {{ $student->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $student->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" name="nisn" id="nisn" value="{{ $student->nisn }}" class="form-control" required>
            </div>
            
            {{-- Tombol akan otomatis mendapat style dari layout --}}
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">Kembali</a>
            
        </form>
    </div>
</div>

@endsection

{{-- (Request 4 & 5) Push style untuk form dan tombol 'Kembali' --}}
@push('scripts')
<style>
    .form-label {
        font-weight: 500;
        color: #374151;
    }

    .form-control,
    .form-select {
        border-radius: 10px; /* Sudut tumpul */
        background-color: #F9FAFB; /* Latar abu-abu soft */
        border: 1px solid #EBF2F9;
        padding: 10px 15px;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: #fff;
        border-color: #EC4899; /* Border pink saat di-klik */
        box-shadow: 0 0 0 3px #FCE7F3; /* Glow pink soft */
    }

    /* Style tombol 'Kembali' */
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