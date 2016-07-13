<?php

namespace CRM\Http\Controllers;

use CRM\Services\ClientService;
use Illuminate\Http\Request;
use CRM\Http\Requests;
use CRM\Http\Requests\AdminClientRequest;
use CRM\Repositories\ClientRepository;


class ClientsController extends Controller
{

    private $repository;
    private $clientService;

    public function __construct(ClientRepository $repository, ClientService $clientService)
    {
        $this->repository = $repository;
        $this->clientService = $clientService;
    }


    public function index()
   {
       $clients = $this->repository->paginate(10);
      return view('admin.clients.index', compact('clients'));
   }


    public function create()
    {


        $nome =  auth()->user()->name ;

        $list_status = [
            'Nenhum' => 'Nenhum',
            'Analista' => 'Analista',
            'Concorrente' => 'Concorrente',
            'Cliente' => 'Cliente',
            'Integrator' =>'Integrator',
            'Investidor' =>'Investidor',
            'Parceiro' => 'Parceiro' ,
            'Prospect' =>  'Prospect',
            'Revenda' => 'Revenda',
            'Outros' => 'Outros',
        ];

        $list_sector = [
                'Nenhum' => 'Nenhum',
                'Agricultura' => 'Agricultura',
                'Bancário' => 'Bancário',
                'Biotecnologia' => 'Biotecnologia',
                'Produtos quimicos' => 'Produtos quimicos',
                'Comunicações' => 'Comunicações',
                'Construção' => 'Construção',
                'Consultando' => 'Consultando',
                'Educação' => 'Educação',
                'Eletrônicos' => 'Eletrônicos',
                'Energia' => 'Energia',
                'Engenharia' =>  'Engenharia',
                'Entretenimento' => 'Entretenimento',
                'Meio Ambiente' => 'Meio Ambiente',
                'Finança' => 'Finança' ,
                'Alimentos e bebidas' => 'Alimentos e bebidas',
                'Governo' => 'Governo',
                'Saúde' => 'Saúde',
                'Hospitalidade' =>'Hospitalidade',
                'Seguro' =>  'Seguro' ,
                'Maquinaria' => 'Maquinaria',
                'Industria' => 'Industria',
                'Meios de comunicação' => 'Meios de comunicação',
                'Lazer' => 'Lazer',
                'Varejo' => 'Varejo',
                'Remessa' => 'Remessa',
                'Tecnologia' => 'Tecnologia',
                'Telecomunicação' => 'Telecomunicação',
                'Transporte' => 'Transporte',
                'Utilidades' => 'Utilidades',
                'Outros' => 'Outros',

        ];


        $list_state = [
            'AC' => 'ACRE','ALAGOAS' => 'ALAGOAS','AMAPÁ'=> 'AMAPÁ','AMAZONAS' => 'AMAZONAS','BAHIA' => 'BAHIA',
            'CEARÁ' => 'CEARÁ',
            'DISTRITO FEDERAL' => 'DISTRITO FEDERAL',
            'ESPÍRITO SANTO' => 'ESPÍRITO SANTO',
            'RORAIMA' =>  'RORAIMA',
            'GOIÁS' => 'GOIÁS',
            'MARANHÃO' => 'MARANHÃO',
            'MATO GROSSO' => 'MATO GROSSO',
            'MATO GROSSO DO SUL' => 'MATO GROSSO DO SUL',
            'MINAS GERAIS' =>  'MINAS GERAIS',
            'PARÁ' => 'PARÁ',
            'PARAÍBA' => 'PARAÍBA',
            'PARANÁ' => 'PARANÁ',
            'PERNAMBUCO' => 'PERNAMBUCO',
            'PIAUÍ' => 'PIAUÍ',
            'RIO DE JANEIRO' => 'RIO DE JANEIRO',
            'RIO GRANDE DO NORTE' => 'RIO GRANDE DO NORTE',
            'RIO GRANDE DO SUL' =>'RIO GRANDE DO SUL',
            'RONDÔNIA' =>  'RONDÔNIA',
            'TOCANTINS' => 'TOCANTINS',
            'SANTA CATARINA' => 'SANTA CATARINA',
            'SÃO PAULO' => 'SÃO PAULO',
            'SERGIPE' => 'SERGIPE',
            ];

        return view('admin.clients.create', compact('client', 'list_status', 'list_state', 'nome', 'list_sector'));

    }

    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->clientService->create($data);
        //dd($request->all());

        return redirect()->route('admin.clients.index');


    }

    public function edit($id)
    {
        $nome =  auth()->user()->name ;

        $list_status = [
            'Nenhum' => 'Nenhum',
            'Analista' => 'Analista',
            'Concorrente' => 'Concorrente',
            'Cliente' => 'Cliente',
            'Integrator' =>'Integrator',
            'Investidor' =>'Investidor',
            'Parceiro' => 'Parceiro' ,
            'Prospect' =>  'Prospect',
            'Revenda' => 'Revenda',
            'Outros' => 'Outros',
        ];

        $list_sector = [
            'Nenhum' => 'Nenhum',
            'Agricultura' => 'Agricultura',
            'Bancário' => 'Bancário',
            'Biotecnologia' => 'Biotecnologia',
            'Produtos quimicos' => 'Produtos quimicos',
            'Comunicações' => 'Comunicações',
            'Construção' => 'Construção',
            'Consultando' => 'Consultando',
            'Educação' => 'Educação',
            'Eletrônicos' => 'Eletrônicos',
            'Energia' => 'Energia',
            'Engenharia' =>  'Engenharia',
            'Entretenimento' => 'Entretenimento',
            'Meio Ambiente' => 'Meio Ambiente',
            'Finança' => 'Finança' ,
            'Alimentos e bebidas' => 'Alimentos e bebidas',
            'Governo' => 'Governo',
            'Saúde' => 'Saúde',
            'Hospitalidade' =>'Hospitalidade',
            'Seguro' =>  'Seguro' ,
            'Maquinaria' => 'Maquinaria',
            'Industria' => 'Industria',
            'Meios de comunicação' => 'Meios de comunicação',
            'Lazer' => 'Lazer',
            'Varejo' => 'Varejo',
            'Remessa' => 'Remessa',
            'Tecnologia' => 'Tecnologia',
            'Telecomunicação' => 'Telecomunicação',
            'Transporte' => 'Transporte',
            'Utilidades' => 'Utilidades',
            'Outros' => 'Outros',

        ];



        $list_state = [
            'ACRE' => 'ACRE','ALAGOAS' => 'ALAGOAS','AMAPÁ'=> 'AMAPÁ','AMAZONAS' => 'AMAZONAS','BAHIA' => 'BAHIA','CEARÁ' => 'CEARÁ','DISTRITO FEDERAL' => 'DISTRITO FEDERAL','ESPÍRITO SANTO' => 'ESPÍRITO SANTO',
            'RORAIMA' =>  'RORAIMA','GOIÁS' => 'GOIÁS','MARANHÃO' => 'MARANHÃO','MATO GROSSO' => 'MATO GROSSO','MATO GROSSO DO SUL' => 'MATO GROSSO DO SUL','MINAS GERAIS' =>  'MINAS GERAIS',
            'PARÁ' => 'PARÁ','PARAÍBA' => 'PARAÍBA', 'PARANÁ' => 'PARANÁ', 'PERNAMBUCO' => 'PERNAMBUCO', 'PIAUÍ' => 'PIAUÍ', 'RIO DE JANEIRO' => 'RIO DE JANEIRO', 'RIO GRANDE DO NORTE' => 'RIO GRANDE DO NORTE',
            'RIO GRANDE DO SUL' =>'RIO GRANDE DO SUL', 'RONDÔNIA' =>  'RONDÔNIA', 'TOCANTINS' => 'TOCANTINS', 'SANTA CATARINA' => 'SANTA CATARINA', 'SÃO PAULO' => 'SÃO PAULO', 'SERGIPE' => 'SERGIPE',

        ];

        $client = $this->repository->find($id);


        return view('admin.clients.edit', compact('client', 'list_status', 'list_state', 'nome', 'list_sector'));

    }

    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->clientService->update($data, $id);

        return redirect()->route('admin.clients.index');
    }

    public function destroy ($id)
    {
        $this->repository->delete($id);

        return redirect()->route('admin.clients.index');
    }







}
