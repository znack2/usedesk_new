<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;

class BlockRepository extends AbstractRepository
{
    public function getAll($type = null,$company_id = null,$active = 0)//$data['blockId']
    {
         $model = DB::table('companyCustomBlock');
            if($type){
                $model->where('type', $type);
            }

            // ->where('company_id', $company_id)
            // ->where('active', $active)
        return $model->orderBy('sort')
            ->orderBy('title')
            ->get();
    }

    public function getParams($company_id,$active = 1)//$data['blockId']
    {
        return DB::table('companyCustomBlockParams')
            ->where('company_id', $company_id)
            ->where('active', $active)
            ->orderBy('sort')
            ->orderBy('title')
            ->get();
    }

    public function getById($type = null,$id)
    {
        return DB::table('companyCustomBlock')
            ->where('id', $id)
            ->get();
    }

    public function createYandexDefaultBlock($company_id)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock =  DB::table('companyCustomBlock')->create([
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
        }
    }

    public function addRetailCrmBlock($company_id,$url)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock = DB::table('companyCustomBlock')->create([
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
        }
    }

    public function getCustomBlock($company_id,$url)//'%/blocks/retail_crm%'
    {
        return DB::table('companyCustomBlock')
            ->where('company_id', $company_id)
            ->where('url', 'like', $url);
    }

    public function getCustomBlockParams($customBlock_id)////$block->id
    {
        return DB::table('companyCustomBlockParams')->where('company_custom_block_id', $customBlock_id);
    }

    public function delete($company_id,$url) //$id
    {
        return $this->getCustomBlock($company_id,$url)->delete();
    }

    public function deleteParam($customBlock_id,$data)
    {
        $model = $this->getCustomBlockParams($customBlock_id);

        if ($paramIds = array_filter(array_fetch($data['params', []], 'id')))
        {
            $model->whereNotIn('id', $paramIds);
        }
        return $model->delete();
    }
}