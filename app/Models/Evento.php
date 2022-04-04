<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['inscricoes'];

    const RASCUNHO = 1;
    const ATIVO = 2;
    const ARQUIVADO = 3;

    public function getRatingAttribute()  
    {
        return $this->reviews->count() > 0 ? round($this->reviews->avg('rating'), 1) : 5;
    }

    public function getRouteKeyName() {
        return 'slug';
    }

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
    // public function teacher(){
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }
    
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
    // public function (){
    //     return $this->belongsToMany('App\Models\User');
    // }

    // public function inscricoes(){
    //     return $this->hasMany('App\Models\Incricao');
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
