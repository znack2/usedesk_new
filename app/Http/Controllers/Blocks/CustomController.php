<?php

namespace App\Http\Controllers\Blocks;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blocks\CustomBlockRequest;
use App\Http\Resources\Blocks\CustomResource;
use App\Http\Resources\Blocks\CustomCollection;
use App\Repository\Blocks\BlockRepository;

/**
 * @resource Custom Blocks
 *
 * Custom Blocks resource representation.
 */
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
     * Store a RetailCrm Block
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createRetailCrmBlock(CustomBlockRequest $request)
    {
        $arr = parse_url($_SERVER['HTTP_REFERER']);
        $url = $arr["scheme"] . "://" . $arr["host"].'/settings/blocks/retail_crm';
        $url = str_replace($_ENV['app.admin_domain'], $_ENV['app.secure_domain'], $url);
        //'%/blocks/retail_crm%'
        if (!$this->blockRepository->getAll($data,$company_id)->exists()){
            $blocks = $this->blockRepository->createRetailCrmBlock($url);
        }
        return $this->sendResponse('block_id:'.$block_id, 'Retail Crm Block created successfully.');
    }

    /**
     * Store a Yandex Block
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createYandexDefaultBlock(CustomBlockRequest $request)
    {
        $arr = parse_url($_SERVER['HTTP_REFERER']);
        $url = $arr["scheme"] . "://" . $arr["host"].'/settings/blocks/retail_crm';
        $url = str_replace($_ENV['app.admin_domain'], $_ENV['app.secure_domain'], $url);

        if (!$this->blockRepository->getAll($data,$company_id)->exists()){
            $blocks = $this->blockRepository->createYandexDefaultBlock($url);
        }
        return $this->sendResponse('block_id:'.$block_id, 'Yandex Block created successfully.');
    }
}
