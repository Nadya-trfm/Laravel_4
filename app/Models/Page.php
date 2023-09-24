<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    protected $table = 'create_page';
    use HasFactory;

    protected $fillable = [
        'text'
    ];
}
