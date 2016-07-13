<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\ClientRepository;
use CRM\Models\Client;
use CRM\Validators\ClientValidator;

/**
 * Class ClientRepositoryEloquent
 * @package namespace Management\Repositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function lists1()
    {
        return $this->model->lists('name', 'id');
    }


    public function model()
    {
        return Client::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
