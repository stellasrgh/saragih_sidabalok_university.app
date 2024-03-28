<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    use HasFactory;
    protected $table = 'presentations';
    protected $primaryKey = 'presentation_id';
    protected $fillable = [
        'presentation_title',
        'presentation_description',
        'presentation_image',
        'presentation_url',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
