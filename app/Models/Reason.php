<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    use HasFactory;
    protected $table ='reasons';
    protected $primaryKey = 'reason_id';

    protected $fillable = [
        'the_reason',
        'reason_photo',
        'reason_description',
    ];

    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
