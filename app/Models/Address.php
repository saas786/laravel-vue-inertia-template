<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'street',
        'complement',
        'number',
        'neighborhood',
        'city',
        'state',
        'country',
        'zip',
        'user_id',
    ];
}
