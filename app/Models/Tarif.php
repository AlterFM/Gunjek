<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    // use HasFactory;
    protected $table = 'tarifs';

    protected $guarded = ['Tarif_id'];
    protected $primaryKey = 'Tarif_id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }
    public function pesan(){
        return $this->hasOne(Pesan::class);
    }
}
