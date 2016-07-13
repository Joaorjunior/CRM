<?php

namespace CRM\Services;


use CRM\Repositories\AddressRepository;
use CRM\Repositories\ClientRepository;
use CRM\Repositories\EmailRepository;
use CRM\Repositories\PhoneRepository;
use CRM\Repositories\QualificationRepository;
use CRM\Repositories\TicketRepository;

class ClientService
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;
    /**
     * @var AddressRepository
     */
    private $addressRepository;
    /**
     * @var QualificationRepository
     */
    private $qualificationRepository;
    /**
     * @var EmailRepository
     */
    private $emailRepository;
    /**
     * @var PhoneRepository
     */
    private $phoneRepository;
    /**
     * @var TicketRepository
     */
    private $ticketRepository;


    public function __construct(ClientRepository $clientRepository, AddressRepository $addressRepository, QualificationRepository $qualificationRepository,
                                EmailRepository $emailRepository, PhoneRepository $phoneRepository, TicketRepository $ticketRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->addressRepository = $addressRepository;
        $this->qualificationRepository = $qualificationRepository;
        $this->emailRepository = $emailRepository;
        $this->phoneRepository = $phoneRepository;

    }


    public function update(array $data, $id)
    {
        $this->clientRepository->update($data, $id);

        $addressId = $this->clientRepository->find($id,['address_id'])->address_id;
        $this->addressRepository->update($data['address'], $addressId);

        $phoneId = $this->clientRepository->find($id,['phone_id'])->phone_id;
        $this->phoneRepository->update($data['phone'], $phoneId);

        $emailId = $this->clientRepository->find($id,['email_id'])->email_id;
        $this->emailRepository->update($data['email'], $emailId);

        $qualificationId = $this->clientRepository->find($id,['qualification_id'])->qualification_id;
        $this->qualificationRepository->update($data['qualification'], $qualificationId);

    }

    public function create(array $data)
    {
        $address = $this->addressRepository->create($data['address']);
        $data['address_id'] = $address->id;

        $qualification = $this->qualificationRepository->create($data['qualification']);
        $data['qualification_id'] = $qualification->id;

        $email = $this->emailRepository->create($data['email']);
        $data['email_id'] = $email->id;

        $phone = $this->phoneRepository->create($data['phone']);
        $data['phone_id'] = $phone->id;


        $this->clientRepository->create($data);

    }

   /* public function delete($id)
    {
        $client = $this->clientRepository->find($id);
        $user = $client->user;
        $client->delete();
        $user->delete();
    }*/

}