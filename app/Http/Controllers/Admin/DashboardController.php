<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        // 2. AMBIL DATA DARI DATABASE
        $totalSiswa = Student::count();
        
        // Ganti angka ini dengan logika Anda nanti
        $kursusAktif = 15; // Contoh: Course::where('status', 'aktif')->count();
        $pendaftarBaru = 8; // Contoh: User::whereDate('created_at', today())->count();

        // 3. KIRIM DATA KE VIEW
        return view('admin.dashboard', [
            'totalSiswa' => $totalSiswa,
            'kursusAktif' => $kursusAktif,
            'pendaftarBaru' => $pendaftarBaru
        ]);
    }
}
