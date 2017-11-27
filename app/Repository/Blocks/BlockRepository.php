<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;

class BlockRepository extends AbstractRepository
{
    /**
     * @param int $type
     * @param int $companyId
     * @return $customBlock
     */
    public function getAll($type = null,$company_id = null,$active = 0)//$data['blockId']
    {
        $customBlock = DB::table('company_custom_blocks');
            if($type){
                $customBlock->where('type', $type);
            }

            // ->where('company_id', $company_id)
            // ->where('active', $active)
        $customBlock->orderBy('sort')
            ->orderBy('title')
            ->get();
        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function getParams($company_id,$active = 1)//$data['blockId']
    {
        $customBlock = DB::table('companyCustomBlockParams')
            ->where('company_id', $company_id)
            ->where('active', $active)
            ->orderBy('sort')
            ->orderBy('title')
            ->get();
        return $customBlock;
    }
    /**
     * @param int $type
     * @param int $id
     * @return $customBlock
     */
    public function getById($type = null,$id)
    {
        $customBlock = DB::table('company_custom_blocks')
            ->where('type', $type)
            ->where('id', $id)
            ->get();
        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $url
     * @return $customBlock
     */
    public function createYandexDefaultBlock($company_id,$url)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock =  DB::table('company_custom_blocks')->create([
                'company_id' => $company_id,
                'type' => $this->TYPE_STATIC,
                'name' => 'Яндекс',
                'title' => '{{ticket_subject}} в яндексе',
                'text' => '<p><a href="https://yandex.ru/search?text={{ticket_subject}}" target="_blank">Искать в яндексе по теме письма</a></p>'
            ]);

//            DB::table('companyCustomBlockParams')->create([
//                'company_custom_block_id' => $customBlock->id,
//                'key' => 'subdomain',
//                'value' => '',
//            ]);
            return $customBlock;
        }
    }
    /**
     * @param int $company_id
     * @param int $url
     * @return $customBlock
     */
    public function addRetailCrmBlock($company_id,$url)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock = DB::table('company_custom_blocks')->create([
                'name' => 'Retail CRM',
                'title' => 'Retail CRM',
                'type' => static::TYPE_DYNAMIC,
                'active' => 0,
                'sort' => 0,
                'company_id' => $company_id,
                'url' => $url,
            ]);

            DB::table('companyCustomBlockParams')->create([
                'company_custom_block_id' => $customBlock->id,
                'key' => 'subdomain',
                'value' => '',
            ]);
            return $customBlock;
        }
    }
    /**
     * @param int $company_id
     * @param int $url
     * @return $customBlock
     */
    public function getCustomBlock($company_id,$url)//'%/blocks/retail_crm%'
    {
        $customBlock = DB::table('company_custom_blocks')
            ->where('company_id', $company_id)
            ->where('url', 'like', $url);
        return $customBlock;
    }
    /**
     * @param int $customBlock_id
     * @return $customBlock
     */
    public function getCustomBlockParams($customBlock_id)////$block->id
    {
        $customBlock = DB::table('companyCustomBlockParams')->where('company_custom_block_id', $customBlock_id);
        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $url
     * @return $customBlock
     */
    public function delete($company_id,$url) //$id
    {
        $customBlock = $this->getCustomBlock($company_id,$url)->delete();
        return $customBlock;
    }
    /**
     * @param int $customBlock_id
     * @param int $data
     * @return $customBlock
     */
    public function deleteParam($customBlock_id,$data)
    {
        $customBlock = $this->getCustomBlockParams($customBlock_id,$data);

        if ($paramIds = array_filter(array_fetch($data['params'], []), 'id'))
        {
            $customBlock->whereNotIn('id', $paramIds);
        }
        $customBlock->delete();
        return $customBlock;
    }
}