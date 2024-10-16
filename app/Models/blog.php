<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog'; // Tabulka by měla být 'blogs' nebo 'blog', podle tvého nastavení v databázi

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'image_path',
    ];
}
