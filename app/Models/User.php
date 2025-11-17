<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Tabel yang digunakan untuk login
    protected $table = 'users';
    protected $primaryKey = 'id'; // ubah sesuai nama kolom primary key di tabel login

    protected $fillable = [
        'email',
        'password',
        'name', // tambahkan kolom lain jika ada, misalnya username, role, dll
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
