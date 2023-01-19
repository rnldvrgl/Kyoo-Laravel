<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ? roles() as this functions name = MA, DA, DS, L
    // ? type() as this functions name = 0, 1, 2, 3
    protected function type(): Attribute
    {
        return new Attribute(
            // ? 0 = MA, 1 = DA, 2 = DS, 3 = L
            // ? MA = Main Admin, DA = Department Admin, DS = Department Staff, L = Librarian
            get: fn ($value) =>  ["MA", "DA", "DS", "L"][$value],
        );
    }
}
