<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status']; // Habilita mass assign, exeto pra esses campos
    protected $withCount = ['inscricoes'];

    const RASCUNHO = 1;
    const ATIVO = 2;
    const ARQUIVADO = 3;
    const RESERVADO04 = 4;
    const RESERVADO05 = 5;
    const RESERVADO06 = 6;
    const RESERVADO07 = 7;
    const RESERVADO08 = 8;
    const RESERVADO09 = 9;

    public function getRatingAttribute()  
    {
        return $this->reviews->count() > 0 ? round($this->reviews->avg('rating'), 1) : 5;
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    //Relacion hasManyThrough
    public function inscricoes(){
        return $this->hasManyThrough('App\Models\Incricao', 'App\Models\Pedido');
    }

    //Relacion uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

}
