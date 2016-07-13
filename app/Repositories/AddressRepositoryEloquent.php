<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\AddressRepository;
use CRM\Models\Address;
use CRM\Validators\AddressValidator;

/**
 * Class AddressRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class AddressRepositoryEloquent extends BaseRepository implements AddressRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Address::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
