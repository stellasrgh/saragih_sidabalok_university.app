<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table ='majors';
    protected $primaryKey = 'major_id';
    protected $fillable = [
        'major_name',
        'major_logo',
        'major_description',
        'dean_name',
        'dean_photo',
    ];
    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
