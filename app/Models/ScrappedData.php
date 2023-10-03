<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrappedData extends Model
{
    use HasFactory;

    protected $fillable = [
        'T4ID',
        'UNIQE',
        'Name',
        'Category',
    ];
}
