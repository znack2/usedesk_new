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
     * @return \App\Http\Resources\Blocks\BlockCollection
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        // if (!empty($keyword)) {
        //     $posts = Post::where('title', 'LIKE', "%$keyword%")
        //         ->orWhere('content', 'LIKE', "%$keyword%")
        //         ->orWhere('category', 'LIKE', "%$keyword%")
        //         ->paginate($perPage);
        // } else {
        //     $posts = Post::paginate($perPage);
        // }
        $blocks = $this->blockRepository->getAll($keyword,$perPage);

        return new BlockCollection($blocks);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \App\Http\Resources\Blocks\BlockResource
     */
    public function create()
    {
        $block = $this->blockRepository->getById($id);

        if (is_null($block)) {
            return $this->sendError('Post not found.');
        }
        return new BlockResource($block);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @return \Illuminate\Http\Response
     */
    public function store(BlockRequest $request)
    {
        $requestData = $request->all();

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $block = $this->blockRepository->create($requestData);

        // return response()->json('Post added!',200);

        // return redirect('admin/posts')->with('flash_message', 'Post added!');
        return $this->sendResponse($block->toArray(), 'Post created successfully.');
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
        $block = $this->blockRepository->getById($id);

        if (is_null($block)) {
            return $this->sendError('Post not found.');
        }
        return new BlockResource($block);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Blocks\BlockResource
     */
    public function edit($id)
    {
        $block = $this->blockRepository->getById($id);

        if (is_null($block)) {
            return $this->sendError('Post not found.');
        }
        return new BlockResource($block);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(BlockRequest $request, $id)
    {

        $requestData = $request->all();

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $block = $this->blockRepository->getById($id);

        if (is_null($block)) {
            return $this->sendError('Post not found.');
        }

        $block = $this->blockRepository->update($requestData);

        return $this->sendResponse($block->toArray(), 'Post updated successfully.');
        // return redirect('admin/posts')->with('flash_message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $block = $this->blockRepository->getById($id);

        if (is_null($block)) {
            return $this->sendError('Post not found.');
        }

        $this->blockRepository->delete($id);

        return $this->sendResponse($id, 'Tag deleted successfully.');
        // return redirect('admin/posts')->with('flash_message', 'Post deleted!');
    }
}
