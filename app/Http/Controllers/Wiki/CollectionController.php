<?php

namespace App\Http\Controllers\Collections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Wiki\CollectionRequest;
use App\Http\Resources\Wiki\CollectionResource;
use App\Http\Resources\Wiki\CollectionCollection;
use App\Repository\Wiki\CollectionRepository;

/**
 * Class CollectionController
 * @package App\Http\Controllers\Collections
 */
class CollectionController extends Controller
{
    /**
     * @var collectionRepository
     */
    protected $collectionRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(CollectionRepository $collectionRepository)
    {
        $this->collectionRepository = $collectionRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Collections\CollectionCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Collections = $this->collectionRepository->getAll($requestData,$perPage = 25);
        //output
        return new CollectionCollection($Collections);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Collections\CollectionResource
     */
    public function show($id)
    {
        $Collection = $this->collectionRepository->getById($id);

        if (is_null($Collection)) {
            return $this->sendError('Collection not found.');
        }
        //output
        return new CollectionResource($Collection);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Collections\CollectionRequest $request
     *
     * @return mixed
     */
    public function store(CollectionRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Collection_id = $this->collectionRepository->createCustomCollection(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Collection_id:'.$Collection_id, 'Collection created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Collections\CollectionRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(CollectionRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Collection_id = $this->collectionRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Collection_id:'.$Collection_id, 'Collection updated successfully.');
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
        $this->collectionRepository->delete($id);
        //output
        return $this->sendResponse('Collection_id:'.$id, 'Collection deleted successfully.');
    }

    /**
     * sort
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function copy(Request $request)
    {
        //get data
        $order = $request->get('order');
        //update in db
        foreach ($order as $sort => $id) {
            $block = $this->blockRepository->updateSort($id,$sort);
        }
        //output
        return $this->sendResponse('blocks:'.$block, 'Blocks have been sorted successfully.');
    }

    /**
     * sort
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function copyMultiple(Request $request)
    {
        //get data
        $order = $request->get('order');
        //update in db
        foreach ($order as $sort => $id) {
            $block = $this->blockRepository->updateSort($id,$sort);
        }
        //output
        return $this->sendResponse('blocks:'.$block, 'Blocks have been sorted successfully.');
    }

    /**
     * sort
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function destroyMultiple(Request $request)
    {
        //get data
        $order = $request->get('order');
        //update in db
        foreach ($order as $sort => $id) {
            $block = $this->blockRepository->updateSort($id,$sort);
        }
        //output
        return $this->sendResponse('blocks:'.$block, 'Blocks have been sorted successfully.');
    }
}
