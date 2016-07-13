<?php

namespace CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Ticket extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'name',
        'client_id',
        'type',
        'datefinal',
        'fase',
        'loss',
        'price',
        'next',
        'description',
        'atendente',
        'atendenteat'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }


}