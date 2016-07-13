<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\LogRepository;
use CRM\Models\Log;
use CRM\Validators\LogValidator;

/**
 * Class LogRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class LogRepositoryEloquent extends BaseRepository implements LogRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Log::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
