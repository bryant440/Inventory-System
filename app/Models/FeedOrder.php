<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedOrder extends Model
{
    use HasFactory;
    protected $fillable = ['feed_type', 'quantity'];

}
