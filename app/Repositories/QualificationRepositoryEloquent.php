<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\QualificationRepository;
use CRM\Models\Qualification;
use CRM\Validators\QualificationValidator;

/**
 * Class QualificationRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class QualificationRepositoryEloquent extends BaseRepository implements QualificationRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Qualification::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
