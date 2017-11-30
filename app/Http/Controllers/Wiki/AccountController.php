<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Wiki\AccountRequest;
use App\Http\Resources\Wiki\AccountResource;
use App\Http\Resources\Wiki\AccountCollection;
use App\Repository\Wiki\AccountRepository;

/**
 * Class AccountController
 * @package App\Http\Controllers\Accounts
 */
class AccountController extends Controller
{
    /**
     * @var accountRepository
     */
    protected $accountRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Accounts\AccountCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Accounts = $this->accountRepository->getAll($requestData,$perPage = 25);
        //output
        return new AccountCollection($Accounts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Accounts\AccountResource
     */
    public function show($id)
    {
        $Account = $this->accountRepository->getById($id);

        if (is_null($Account)) {
            return $this->sendError('Account not found.');
        }
        //output
        return new AccountResource($Account);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Accounts\AccountRequest $request
     *
     * @return mixed
     */
    public function store(AccountRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Account_id = $this->accountRepository->createCustomAccount(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Account_id:'.$Account_id, 'Account created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Accounts\AccountRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(AccountRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Account_id = $this->accountRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Account_id:'.$Account_id, 'Account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $this->accountRepository->delete($id);
        //output
        return $this->sendResponse('Account_id:'.$id, 'Account deleted successfully.');
    }
}
