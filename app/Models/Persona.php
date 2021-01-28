<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['persona_id'];

    public function familias(){
        return $this->hasMany(Familia::class,'persona_id');
    }

    public function beneficiarios(){
        return $this->hasMany(Beneficiario::class,'persona_id');
    }

    public function anexo(){
        return $this->hasOne(Anexo::class,'persona_id');
    }
}
