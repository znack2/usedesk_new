<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\BlackWhiteListRequest;
use App\Http\Resources\Settings\BlackWhiteListResource;
use App\Repository\Settings\BlackWhiteListRepository;
/**
 * 
 * @resource BlackWhiteList
 *
 * страница настроек https://devsecure.usedesk.ru/settings/black-white-list
 */
class BlackWhiteListController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlackWhiteListRequest $request)
    {
        //get data
        $requestData = $request->all();
        //$company_id = $this->CurrentCompany->id;

        $BlackWhiteList_id = $this->BlackWhiteListRepository->create(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('BlackWhiteList_id:'.$BlackWhiteList_id, 'BlackWhiteList created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');

        $BlackWhiteList = $this->BlackWhiteListRepository->getById($id,'CompanyCustomBlackWhiteList');

        if (is_null($BlackWhiteList)) {
            return $this->sendError('BlackWhiteList not found.');
        }
        //output
        return new BlackWhiteListResource($BlackWhiteList);
    }
}
