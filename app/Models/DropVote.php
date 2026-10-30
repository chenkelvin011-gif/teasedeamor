<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'option_key',
        'title',
        'description',
        'votes_count',
    ];
}
