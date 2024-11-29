<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    class Violation extends Model
    {
        protected $fillable = ['student_id', 'jenis_pelanggaran', 'tanggal'];

        public function student()
        {
            return $this->belongsTo(Student::class);
        }
    }
}