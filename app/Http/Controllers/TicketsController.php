<?php

namespace CRM\Http\Controllers;

use CRM\Repositories\ClientRepository;
use CRM\Repositories\TicketRepository;
use Illuminate\Http\Request;
use CRM\Http\Requests\AdminTicketRequest;
use CRM\Http\Requests;
use CRM\Http\Controllers\Controller;

class TicketsController extends Controller
{

    private $repository;
    private $clientRepository;

    public function __construct(TicketRepository $repository, ClientRepository $clientRepository)
    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
    }

    public function index()
    {
        $tickets = $this->repository->paginate(10);
        return view('admin.tickets.index', compact('tickets'));
    }

    public function create()
    {

        $clients = $this->clientRepository->lists1();

        $list_status = [
            'Nenhum' => 'Nenhum',
            'Qualificação' => 'Qualificação',
            'Precisa de Análise' => 'Precisa de Análise',
            'Proposta' => 'Proposta',
            'Negociação' => 'Negociação',
            'Negócio Fechado' => 'Negócio Fechado',
            'Negócio Perdido' => 'Negócio Perdido',
        ];

        $list_loss = [
            'Nenhum' => 'Nenhum',
            'Perdeu para o concorrente' => 'Perdeu para o concorrente',
            'Nenhum orçamento / Financiamento perdido' => 'Nenhum orçamento / Financiamento perdido',
            'Perdido' => 'Perdido',
            'Nenhuma decisão / Não responde' => 'Nenhuma decisão / Não responde',
            'Preço' => 'Preço',
            'Outros' => 'Outros',
        ];

        $list_type = [
            'Nenhum' => 'Nenhum',
            'Novo Negócio' => 'Novo Negócio',
            'Negócio Existente' => 'Negócio Existente',
        ];


        return view('admin.tickets.create', compact('ticket','list_status', 'clients', 'list_type', 'list_loss'));

    }

    public function store(AdminTicketRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        //dd($request->all());

        return redirect()->route('admin.tickets.index');


    }

    public function edit($client_id)
    {

        $log = $this->repository->find($client_id);
        return view('admin.logs.index', compact('log'));

    }

















}
