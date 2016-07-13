<?php

namespace CRM\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CRM\Repositories\TicketRepository;
use CRM\Models\Ticket;
use CRM\Validators\TicketValidator;

/**
 * Class TicketRepositoryEloquent
 * @package namespace CRM\Repositories;
 */
class TicketRepositoryEloquent extends BaseRepository implements TicketRepository
{

    public function lists2()
    {
        return $this->model->lists('name', 'id');
    }
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Ticket::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }




}