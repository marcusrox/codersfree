<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status']; // Habilita mass assign, exeto pra esses campos
    protected $withCount = ['inscricoes'];

    const NOVO = 1;
    const PARCIAL = 2;
    const QUITADO = 3;
    const CANCELADO = 4;
    const RESERVADO05 = 5;
    const RESERVADO06 = 6;
    const RESERVADO07 = 7;
    const RESERVADO08 = 8;
    const RESERVADO09 = 9;

    //Relacion uno a muchos

    // public function reviews(){
    //     return $this->hasMany('App\Models\Review');
    // }

    // public function requirements(){
    //     return $this->hasMany('App\Models\Requirement');
    // }

    // public function goals(){
    //     return $this->hasMany('App\Models\Goal');
    // }

    // public function audiences(){
    //     return $this->hasMany('App\Models\Audience');
    // }

    // public function sections(){
    //     return $this->hasMany('App\Models\Section');
    // }

    //Relacion uno a muchos inversa

    public function evento(){
        return $this->belongsTo('App\Models\Evento', 'evento_id');
    }

    // public function level(){
    //     return $this->belongsTo('App\Models\Level');
    // }

    // public function category(){
    //     return $this->belongsTo('App\Models\Category');
    // }

    // public function price(){
    //     return $this->belongsTo('App\Models\Level');
    // }

    //Relacion muchos a muchos
    public function inscricoes()
    {
        return $this->hasMany('App\Models\Incricao');
    }

    // public function (){
    //     return $this->belongsToMany('App\Models\User');
    // }



    //Relacion uno a uno polimorfica

    public function image(){
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //Relacion hasManyThrough
    // public function lessons(){
    //     return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    // }
}
