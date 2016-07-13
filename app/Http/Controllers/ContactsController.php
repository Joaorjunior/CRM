<?php

namespace CRM\Http\Controllers;

use CRM\Http\Requests\AdminContactRequest;
use CRM\Repositories\ClientRepository;
use CRM\Repositories\ContactRepository;
use CRM\Repositories\TicketRepository;
use Illuminate\Http\Request;

use CRM\Http\Requests;
use CRM\Http\Controllers\Controller;

class ContactsController extends Controller
{
    private $contactrepository;
    private $clientrepository;

    public function __construct(ContactRepository $contactRepository, ClientRepository $clientRepository, TicketRepository $ticketRepository)
    {
        $this->contactrepository = $contactRepository;
        $this->clientrepository = $clientRepository;
        $this->ticketrepository = $ticketRepository;
    }




    public function index()
    {
        $contacts = $this->contactrepository->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        $clients = $this->clientrepository->lists1();


        return view('admin.contacts.create', compact('contact','clients'));

    }

    public function store(AdminContactRequest $request)
    {
        $data = $request->all();
        $this->contactrepository->create($data);


        return redirect()->route('admin.contacts.index');


    }



}

