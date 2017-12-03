<?php

namespace App\Services;

use App\Services\AbstractService;

class DemoDataService extends AbstractService
{
	private $table = 'company_demo_data';
	private $company = null;

	private $userGroupsRepository;
	private $userRepository;
	private $companyEmailChannelRepository;
	private $clientRepository;
	private $clientCompanyRepository;
	private $triggersRepository;
	private $macrosCategoriesRepository;
	private $macrosesRepository;

	public function __construct($company //\Company 
        
		// userGroupsRepository $userGroupsRepository,
		// userRepository $userRepository,
		// companyEmailChannelRepository $companyEmailChannelRepository,
		// clientRepository $clientRepository,
		// clientCompanyRepository $clientCompanyRepository,
		// triggersRepository $triggersRepository,
		// macrosCategoriesRepository $macrosCategoriesRepository,
		// macrosesRepository $macrosesRepository
	)
    {
        $this->company = $company;

        // $this->userGroupsRepository = $userGroupsRepository;
        // $this->userRepository = $userRepository;
        // $this->companyEmailChannelRepository = $companyEmailChannelRepository;
        // $this->clientRepository = $clientRepository;
        // $this->clientCompanyRepository = $clientCompanyRepository;
        // $this->triggersRepository = $triggersRepository;
        // $this->macrosCategoriesRepository = $macrosCategoriesRepository;
        // $this->macrosesRepository = $macrosesRepository;
    }

    public function createDemoData()
    {
    	//check and delete demodata
        if ($this->dataExists()) {
            $this->deleteDemoData();
        }
        //type of data
        $types = [
        	'users',
        	'userGroups',
        	'companyEmailChannel',
        	'clientCompanies',
        	'triggers',
        	'macrosCategories',
        	'clients'
        ];
        //insert demodata
        foreach ($types as $type) {
        	$list_ids[$type] = $this->{ $type }.'Repository'->create(
        		$this->company->id,
        		config('demodata'.$type)
        	);
        }
        //record info what has been inserted
        if ($list_ids) {
            \DB::table($this->table)->insert([
                'company_id' => $this->company->id,
                'data' => serialize($list_ids)
            ]);
        }
        //if error send to chat
        // if ($this->errors) {
        //     $this->telegramService->SendDemoError();
        // }
    }

    public function dataExists()
    {
        return \DB::table($this->table)
		        ->where('company_id', $this->company->id)
		        ->exists();
    }

    public function deleteDemoData()
    {
        $record = \DB::table($this->table)
        			->where('company_id', $this->company->id)
        			->first();
        			
        if ($record) {
            $data = unserialize($record->data);
            foreach ($data as $model => $ids) {
                if ($ids) {
                    switch ($model) {
                        case 'userGroups':
                            $this->userGroupsRepository->delete($id);
                            break;
                        case 'users':
                            $this->userRepository->delete($id);
                            break;
                        case 'channels':
                        	$this->companyEmailChannelRepository->delete($id);
                            break;
                        case 'clients':
                            $this->clientRepository->delete($id);
                            break;
                        case 'clientCompanies':
                            $this->clientCompanyRepository->delete($id);
                            break;
                        case 'triggers':
                            $this->triggersRepository->delete($id);
                            break;
                        case 'macrosCategories':
                            $this->macrosCategoriesRepository->delete($id);
                            break;
                        case 'macroses':
                            $this->macrosesRepository->delete($id);
                            break;
                    }
                }
            }

            \DB::table($this->table)
            	->where('company_id', $this->company->id)
            	->delete();
        }

    }
}