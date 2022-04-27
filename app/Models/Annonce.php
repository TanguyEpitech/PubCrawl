<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'titre',
        "description",
        'photographie',
        'user_id',
        'prix',
        'created_at',
        'updated_at'
    ];
}
