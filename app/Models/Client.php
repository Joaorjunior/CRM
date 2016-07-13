<?php

namespace CRM\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Client extends Model implements Transformable
{
    use TransformableTrait;
    protected $fillable = [
        'qualification_id',
        'atendente',
        'name',
        'address_id',
        'phone_id',
        'email_id',
        'atendenteat',
        'description',
        'sector'

    ];


    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }

    public function qualification()
    {
        return $this->belongsTo(Qualification::class);
    }

    public function email()
    {
        return $this->belongsTo(Email::class);
    }

}