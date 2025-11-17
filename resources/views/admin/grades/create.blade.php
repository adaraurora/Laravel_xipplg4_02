@extends('layout.admin')

@section('content')
<div class="container">
  <h1>Tambah Grade</h1>

  <form action="{{ route('admin.grades.store') }}" method="POST">
    @include('admin.grades._form', ['buttonText' => 'Tambah', 'students' => $students])
  </form>
</div>
@endsection
