<?php

namespace CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Log extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'date',
        'description'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}