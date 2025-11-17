@extends('layout.admin')

@section('content')
<div class="container">
  <h1>Detail Grade</h1>

  <div class="card">
    <div class="card-body">
      <p><strong>Student:</strong> {{ $grade->student->name ?? '—' }}</p>
      <p><strong>Subject:</strong> {{ $grade->subject }}</p>
      <p><strong>Score:</strong> {{ $grade->score }}</p>
      <p><strong>Letter:</strong> {{ $grade->grade_letter }}</p>
      <p><strong>Description:</strong> {{ $grade->description ?? '-' }}</p>
      <a href="{{ route('admin.grades.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</div>
@endsection
