<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\EmailRepository;
use CRM\Models\Email;
use CRM\Validators\EmailValidator;

/**
 * Class EmailRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class EmailRepositoryEloquent extends BaseRepository implements EmailRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Email::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
