<?php

namespace CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contact extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'client_id',
        'titulo',
        'email',
        'phone',
        'celular',
        'atendente',
        'atendenteat',

    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


}
