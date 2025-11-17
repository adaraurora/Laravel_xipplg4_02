@csrf

<div class="mb-3">
  <label for="student_id" class="form-label">Student</label>
  <select name="student_id" id="student_id" class="form-select" required>
    <option value="">-- Pilih student --</option>
    @foreach($students as $s)
      <option value="{{ $s->id }}" {{ (old('student_id', $grade->student_id ?? '') == $s->id) ? 'selected' : '' }}>
        {{ $s->name }} ({{ $s->nis ?? '-' }})
      </option>
    @endforeach
  </select>
  @error('student_id')<div class="text-danger small">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="subject" class="form-label">Subject</label>
  <input type="text" name="subject" id="subject" value="{{ old('subject', $grade->subject ?? '') }}" class="form-control" required>
  @error('subject')<div class="text-danger small">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="score" class="form-label">Score</label>
  <input type="number" step="0.01" min="0" max="100" name="score" id="score" value="{{ old('score', $grade->score ?? '') }}" class="form-control" required>
  @error('score')<div class="text-danger small">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
  <label for="description" class="form-label">Description (optional)</label>
  <textarea name="description" id="description" class="form-control">{{ old('description', $grade->description ?? '') }}</textarea>
</div>

<button class="btn btn-primary" type="submit">{{ $buttonText ?? 'Simpan' }}</button>
<a href="{{ route('admin.grades.index') }}" class="btn btn-secondary">Batal</a>
