<?php

namespace App\Http\Controllers\Blocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blocks\BlockRequest;
use App\Http\Resources\Blocks\BlockResource;
use App\Http\Resources\Blocks\BlockCollection;
use App\Repository\Blocks\BlockRepository;

/**
 * Class BlockController
 * @package App\Http\Controllers\Blocks
 */
class BlockController extends Controller
{
    /**
     * @var BlockRepository
     */
    protected $blockRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(BlockRepository $blockRepository)
    {
        $this->blockRepository = $blockRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Blocks\BlockCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $blocks = $this->blockRepository->getAll($requestData,$perPage = 25);
        //output
        return new BlockCollection($blocks);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Blocks\BlockResource
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');
        // $blockParams = [];

        $block = $this->blockRepository->getById($id,'CompanyCustomBlock');
        // if($type == 'dynamic'){
        //     $blockParams = $this->blockRepository->getCustomBlockParams($id);
        // }
        

        if (is_null($block)) {
            return $this->sendError('Block not found.');
        }
        //output
        return new BlockResource($block);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Blocks\BlockRequest $request
     *
     * @return mixed
     */
    public function store(BlockRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $block_id = $this->blockRepository->createCustomBlock(
            $company_id =1,
            $requestData
        );

        // return response()->json('Block added!',200);
        // return redirect('admin/posts')->with('flash_message', 'Block added!');
        // return redirect('admin/posts')->with('flash_message', 'Block updated!');
        // return redirect('admin/posts')->with('flash_message', 'Block deleted!');
        //output
        return $this->sendResponse('block_id:'.$block_id, 'Block created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Blocks\BlockRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(BlockRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $block_id = $this->blockRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('block_id:'.$block_id, 'Block updated successfully.');
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
        $this->blockRepository->delete($id);
        //output
        return $this->sendResponse('block_id:'.$id, 'Block deleted successfully.');
    }

    /**
     * sort
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function sort(Request $request)
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
