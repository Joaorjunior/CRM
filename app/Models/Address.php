<?php

namespace CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Address extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'state',
        'district',
        'street',
        'city',
        'number',
        'complement',
        'zipcode'
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }

}
