<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Driver extends Model
{
    use HasFactory;

    protected $table = 'master_drivers';
    protected $guarded = ['driver_id'];
    protected $primaryKey = 'driver_id';
    protected $keyType = 'string';
    public $incrementing = false;

    // relasi master_drivers
    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
}
