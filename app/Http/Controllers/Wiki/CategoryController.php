<?php

namespace App\Http\Controllers\Wiki;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Wiki\CategoryRequest;
use App\Http\Resources\Wiki\CategoryResource;
use App\Http\Resources\Wiki\CategoryCollection;
use App\Repository\Wiki\CategoryRepository;

/**
 * 
 * @resource Category
 *
 * Category resource representation.
 */
class CategoryController extends Controller
{
    /**
     * @var categoryRepository
     */
    protected $categoryRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Categorys\CategoryCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Categorys = $this->categoryRepository->getAll($requestData,$perPage = 25);
        //output
        return new CategoryCollection($Categorys);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Categorys\CategoryResource
     */
    public function show($id)
    {
        $Category = $this->categoryRepository->getById($id);

        if (is_null($Category)) {
            return $this->sendError('Category not found.');
        }
        //output
        return new CategoryResource($Category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Categorys\CategoryRequest $request
     *
     * @return mixed
     */
    public function store(CategoryRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Category_id = $this->categoryRepository->createCustomCategory(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Category_id:'.$Category_id, 'Category created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Categorys\CategoryRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(CategoryRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Category_id = $this->categoryRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Category_id:'.$Category_id, 'Category updated successfully.');
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
        $this->categoryRepository->delete($id);
        //output
        return $this->sendResponse('Category_id:'.$id, 'Category deleted successfully.');
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
