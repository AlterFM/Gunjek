<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Location extends Model
{
    use HasFactory;

    protected $table = 'master_locations';

    protected $guarded = ['Kampus_id'];
    protected $primaryKey = 'Kampus_id';
    protected $keyType = 'string';
    public $incrementing = false;


}
