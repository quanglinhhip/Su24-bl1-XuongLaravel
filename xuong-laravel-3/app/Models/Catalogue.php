<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'cover', 'is_active'
    ];
    protected $casts = [
        'is_active' => 'boolean' //auto convert true/false ->0/1 de luu vao db vao khi lay ra thi nguoc lai
    ];
}
