@extends('layout.admin')

@section('content')
<div class="container">
  <h1>Edit Grade</h1>

  <form action="{{ route('admin.grades.update', $grade) }}" method="POST">
    @method('PUT')
    @include('admin.grades._form', ['buttonText' => 'Update', 'grade' => $grade, 'students' => $students])
  </form>
</div>
@endsection
