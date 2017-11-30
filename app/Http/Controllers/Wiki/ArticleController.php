<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Wiki\ArticleRequest;
use App\Http\Resources\Wiki\ArticleResource;
use App\Http\Resources\Wiki\ArticleCollection;
use App\Repository\Wiki\ArticleRepository;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Articles
 */
class ArticleController extends Controller
{
    /**
     * @var articleRepository
     */
    protected $articleRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Articles\ArticleCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Articles = $this->articleRepository->getAll($requestData,$perPage = 25);
        //output
        return new ArticleCollection($Articles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Articles\ArticleResource
     */
    public function show($id)
    {
        $Article = $this->articleRepository->getById($id);

        if (is_null($Article)) {
            return $this->sendError('Article not found.');
        }
        //output
        return new ArticleResource($Article);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Articles\ArticleRequest $request
     *
     * @return mixed
     */
    public function store(ArticleRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Article_id = $this->articleRepository->createCustomArticle(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Article_id:'.$Article_id, 'Article created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Articles\ArticleRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(ArticleRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Article_id = $this->articleRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Article_id:'.$Article_id, 'Article updated successfully.');
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
        $this->articleRepository->delete($id);
        //output
        return $this->sendResponse('Article_id:'.$id, 'Article deleted successfully.');
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
