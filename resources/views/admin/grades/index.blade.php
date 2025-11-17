@extends('layout.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Grades</h1>
    <a href="{{ route('admin.grades.create') }}" class="btn btn-success">Tambah Grade</a>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>#</th>
            <th>Student</th>
            <th>Subject</th>
            <th>Score</th>
            <th>Letter</th>
            <th>Created</th>
            <th class="text-end">Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($grades as $grade)
          <tr>
            <td>{{ $loop->iteration + ($grades->currentPage()-1)*$grades->perPage() }}</td>
            <td>{{ $grade->student->name ?? '—' }}</td>
            <td>{{ $grade->subject }}</td>
            <td>{{ $grade->score }}</td>
            <td><strong>{{ $grade->grade_letter }}</strong></td>
            <td>{{ $grade->created_at->format('Y-m-d') }}</td>
            <td class="text-end">
              <a href="{{ route('admin.grades.show', $grade) }}" class="btn btn-sm btn-info">View</a>
              <a href="{{ route('admin.grades.edit', $grade) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('admin.grades.destroy', $grade) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus grade ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center">Belum ada grade.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <div class="mt-3">
    {{ $grades->links() }}
  </div>
</div>
@endsection
