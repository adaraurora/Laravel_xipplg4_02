@extends('layout.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="row">
    
    {{-- Card 1: Total Siswa --}}
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center">
                <div class="fs-1 text-primary me-3">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Total Siswa</h5>
                    {{-- INI YANG PENTING --}}
                    <p class="fs-3 fw-bold mb-0">{{ $totalSiswa }}</p> 
                </div>
            </div>
        </div>
    </div>
    
    {{-- Card 2: Kursus Aktif --}}
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center">
                <div class="fs-1 text-info me-3">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Kursus Aktif</h5>
                    {{-- INI YANG PENTING --}}
                    <p class="fs-3 fw-bold mb-0">{{ $kursusAktif }}</p>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Card 3: Pendaftar Baru --}}
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center">
                <div class="fs-1 text-success me-3">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Pendaftar Baru</h5>
                    {{-- INI YANG PENTING --}}
                    <p class="fs-3 fw-bold mb-0">{{ $pendaftarBaru }}</p>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Selamat datang, Admin!</h5>
    <p class="mb-0">Anda berada di panel admin <b>Dilesin Academy</b>. Gunakan menu di samping untuk mengelola data.</p>
  </div>
</div>
@endsection

@push('scripts')
<style>
  .text-primary {
    color: #EC4899 !important;
  }
</style>
@endpush