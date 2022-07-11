<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodmodel extends Model
{
    use HasFactory;

    protected $table = 'prodmodels';

    protected $primaryKey = 'id';

    protected $fillable = [
        'prod_name', 'category', 'qty'
    ];
}
