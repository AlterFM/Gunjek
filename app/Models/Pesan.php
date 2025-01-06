<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    // use HasFactory;
    protected $table = 'pesans';

    protected $guarded = ['pesans_id'];
    protected $primaryKey = 'pesans_id';
    protected $keyType = 'string';
    public $incrementing = false;

}
