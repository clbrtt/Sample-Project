<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;





class AuthModel extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $table = 'account';

    protected $guard = 'admin';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'username', 'password'
    ];

    protected $hidden = [
        'password'
    ];
}
