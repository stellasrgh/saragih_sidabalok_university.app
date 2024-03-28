<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'service_id';

    protected $fillable = [
        'service_name',
        'service_icon',
        'service_description',
    ];

    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
