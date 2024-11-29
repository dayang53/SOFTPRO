<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    class Student extends Model
    {
        protected $fillable = ['nama', 'kelas', 'jurusan'];

        public function violations()
        {
            return $this->hasMany(Violation::class);
        }
    }
}