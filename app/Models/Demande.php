<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demandes';
    protected $primaryKey = 'id';

    // Attributes that can be updated.
    protected $fillable = ['status', 'updated_at'];

    // Attributes that takes defaut values.
    protected $attributes = ['status' => 'en cours'];

}
