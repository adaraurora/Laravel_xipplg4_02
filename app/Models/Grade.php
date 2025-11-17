<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Grade extends Model
{
    protected $fillable = [
    'student_id',
    'subject',
    'score',
    'grade_letter',
    'description',
    ];


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public static function computeLetter(float $score): string
    {
        if ($score >= 85) return 'A';
        if ($score >= 70) return 'B';
        if ($score >= 55) return 'C';
        if ($score >= 40) return 'D';
        return 'E';
    }
}