<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;





class AuthModel extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'admin';

    protected $primaryKey = 'Id';

    protected $fillable = [
        'Email', 'Password'
    ];
}
