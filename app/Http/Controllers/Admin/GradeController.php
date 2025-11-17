<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grade;     // ← TAMBAHKAN INI
use App\Models\Student;   // (opsional jika dipakai)

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // ambil semua grades (relasi student eager load)
        $grades = Grade::with('student')->latest()->paginate(15);
        return view('admin.grades.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // butuh daftar student untuk select
        $students = Student::orderBy('nama_lengkap')->get();
        return view('admin.grades.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject' => 'required|string|max:255',
            'score' => 'required|numeric|min:0|max:100',
            'description' => 'nullable|string',
        ]);

        // hitung letter grade
        $data['grade_letter'] = Grade::computeLetter((float) $data['score']);

        Grade::create($data);

        return redirect()->route('admin.grades.index')
            ->with('success', 'Grade berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        $grade->load('student');
        return view('admin.grades.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        $students = Student::orderBy('nama_lengkap')->get();
        return view('admin.grades.edit', compact('grade', 'students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        $data = $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject' => 'required|string|max:255',
            'score' => 'required|numeric|min:0|max:100',
            'description' => 'nullable|string',
        ]);

        $data['grade_letter'] = Grade::computeLetter((float) $data['score']);

        $grade->update($data);

        return redirect()->route('admin.grades.index')
            ->with('success', 'Grade berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('admin.grades.index')
            ->with('success', 'Grade berhasil dihapus.');
    }
}
