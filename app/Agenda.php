<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas';
    protected $fillable = ['nome', 'descricao'];
    
    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function pacientes()
    {
        return $this->hasOne(Paciente::class, 'id', 'paciente_id');
    }
}
