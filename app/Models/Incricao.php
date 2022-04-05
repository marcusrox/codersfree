<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incricao extends Model
{
    use HasFactory;

    protected $table = 'inscricoes';
    protected $guarded = ['id']; // Habilita mass assign, exeto pra esses campos

    //Relacion uno a muchos inversa
    public function pedido(){
        return $this->belongsTo('App\Models\Pedido', 'pedido_id');
    }

}
