<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\CompanyCustomBlock;

class BlockRepository extends AbstractRepository
{
    /**
     * @param int $keyword
     * @param int $perPage
     * @param int $type
     * @param int $company_id
     * @param int $active
     * @param int $active
     *
     * @return $customBlock
     */
    public function getAll($keyword=null,$perPage=false,$type = null,$company_id = null,$active = 0)//$data['blockId']
    {
            $customBlock = DB::table('company_custom_blocks');
        if (!empty($keyword)) {
            $customBlock->where('title', 'LIKE', "%$keyword%")
                 ->orWhere('name', 'LIKE', "%$keyword%")
                 ->orWhere('url', 'LIKE', "%$keyword%");
         }
        if($type){
            $customBlock->where('type', $type);
        }
            // ->where('company_id', $company_id)
            // ->where('active', $active)
            $customBlock->orderBy('sort')
                        ->orderBy('title');

        if($perPage){
            $customBlock->paginate($perPage);
        }else{
            $customBlock->get();
        }
        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $active
     *
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
     * @param int $id
     * @param int $type
     *
     * @return $customBlock
     */
    public function getById($id,$type = false)
    {
        $customBlock = DB::table('company_custom_blocks');

        if($type){
            $customBlock->where('type', $type);
        }
            $customBlock->where('id', $id)->get();

        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $customBlock
     */
    public function createYandexDefaultBlock($company_id,$url)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock = $this->createCustomBlock(
                'Яндекс',
                '{{ticket_subject}} в яндексе',
                CompanyCustomBlock::TYPE_STATIC,
                $company_id,
                $url
            );
            $customBlock =  DB::table('company_custom_blocks')->create([
                '' => '<p><a href="https://yandex.ru/search?text={{ticket_subject}}" target="_blank">Искать в яндексе по теме письма</a></p>'
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
     *
     * @return $customBlock
     */
    public function addRetailCrmBlock($company_id,$url)
    {
        if (!$this->getCustomBlock($company_id,$url)->exists()) {
            $customBlock = $this->createCustomBlock(
                'Retail CRM',
                'Retail CRM',
                CompanyCustomBlock::TYPE_DYNAMIC,
                $company_id,
                $url
            );

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
     *
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
     * @param int $name
     * @param int $title
     * @param int $type
     * @param int $company_id
     * @param int $url
     * @param int $active
     * @param int $sort
     *
     * @return $customBlock
     */
    public function createCustomBlock($name,$title,$type,$company_id,$url,$active = false,$sort = false)
    {
        $customBlock = DB::table('company_custom_blocks')->create([
            'name' => $name,
            'title' => $title,
            'type' => $type,
            'active' => $active,
            'sort' => $sort,
            'company_id' => $company_id,
            'url' => $url
        ]);
        return $customBlock;
    }
    /**
     * @param int $name
     * @param int $title
     * @param int $type
     * @param int $company_id
     * @param int $url
     * @param int $active
     * @param int $sort
     *
     * @return $customBlock
     */
    public function update($name,$title,$type,$company_id,$url,$active = false,$sort = false)
    {
        $customBlock = DB::table('company_custom_blocks')->update([
            'name' => $name,
            'title' => $title,
            'type' => $type,
            'active' => $active,
            'sort' => $sort,
            'company_id' => $company_id,
            'url' => $url
        ]);
        return $customBlock;
    }
    /**
     * @param int $customBlock_id
     *
     * @return $customBlock
     */
    public function getCustomBlockParams($customBlock_id) //$block->id
    {
        $customBlock = DB::table('companyCustomBlockParams')->where('company_custom_block_id', $customBlock_id);
        return $customBlock;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $customBlock
     */
    public function delete($company_id,$url=null) //$id
    {
        $customBlock = $this->getCustomBlock($company_id,$url)->delete();
        return $customBlock;
    }
    /**
     * @param int $customBlock_id
     * @param int $data
     *
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