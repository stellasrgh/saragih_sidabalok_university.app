<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table ='registrations';
    protected $primaryKey = 'registration_id';
    protected $fillable = [
        'name',
        'gender',
        'birth',
        'email',
        'major',
        'phone',
        'address',
        'file',
        'status',
    ];
    protected $casts = [

        'birth' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
