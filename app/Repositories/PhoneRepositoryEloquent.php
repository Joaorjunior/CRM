<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\PhoneRepository;
use CRM\Models\Phone;
use CRM\Validators\PhoneValidator;

/**
 * Class PhoneRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class PhoneRepositoryEloquent extends BaseRepository implements PhoneRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Phone::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
