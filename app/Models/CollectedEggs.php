<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectedEggs extends Model
{

    use HasFactory;
    protected $table = 'collected_eggs';
    protected $fillable = [
        'collected_eggs',
        'egg_condition'
    ];
}
