<?php

namespace CRM\Http\Controllers;

use CRM\Repositories\LogRepository;
use CRM\Repositories\TicketRepository;
use Illuminate\Http\Request;

use CRM\Http\Requests;
use CRM\Http\Controllers\Controller;

class LogsController extends Controller
{
    private $repository;
    private $ticketRepository;

    public function __construct(LogRepository $repository, TicketRepository $ticketRepository)
    {
        $this->repository = $repository;
        $this->ticketrepository = $ticketRepository;

    }


    public function index()
    {
        $logs = $this->repository->paginate(10);
        return view('admin.logs.index', compact('logs'));
    }


    public function edit($client_id)
    {

        $log = $this->repository->find($client_id);
        return view('admin.logs.index', compact('log'));

    }

    public function update()
    {


    }


















}

