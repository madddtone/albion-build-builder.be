<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponFighter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'q_1',
        'q_2',
        'q_3',
        'q_4',
        'w_1',
        'w_2',
        'w_3',
        'w_4',
        'w_5',
        'w_6',
        'e',
        'passive_1',
        'passive_2',
        'passive_3',
        'passive_4',
        'skill_id',
        'weapon_figther_id',
    ];
}
