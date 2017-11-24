<?php

namespace App\Http\Controllers\Blocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blocks\CustomBlockRequest;
use App\Http\Resources\Blocks\CustomResource;
use App\Http\Resources\Blocks\CustomCollection;
use App\Repository\Blocks\BlockRepository;

class CustomController extends Controller
{
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
     * @return \App\Http\Resources\Blocks\CustomCollection
     */
    public function index()
    {
        $blocks = $this->blockRepository->getAll($type = 'custom');

        return new CustomCollection($blocks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a RetailCrm Block
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRetailCrmBlock(CustomBlockRequest $request)
    {
        $arr = parse_url($_SERVER['HTTP_REFERER']);
        $url = $arr["scheme"] . "://" . $arr["host"].'/settings/blocks/retail_crm';
        $url = str_replace($_ENV['app.admin_domain'], $_ENV['app.secure_domain'], $url);

        $blocks = $this->blockRepository->addRetailCrmBlock($$url);
    }

    /**
     * Store a Yandex Default Block
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createYandexDefaultBlock(CustomBlockRequest $request)
    {
        $arr = parse_url($_SERVER['HTTP_REFERER']);
        $url = $arr["scheme"] . "://" . $arr["host"].'/settings/blocks/retail_crm';
        $url = str_replace($_ENV['app.admin_domain'], $_ENV['app.secure_domain'], $url);

        $blocks = $this->blockRepository->addRetailCrmBlock($$url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Http\Resources\Blocks\CustomResource
     */
    public function show($id)
    {
        $block = $this->blockRepository->getById($type = 'custom',$id);

        return new CustomResource($block);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomBlockRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
