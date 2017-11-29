<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\CompanyCustomBlock;

class BlockRepository extends AbstractRepository
{
    /**
     * @param int $data['keyword']
     * @param int $perPage
     * @param int $type
     * @param int $company_id
     * @param int $active
     * @param int $active
     *
     * @return $customBlock
     */
    public function getAll($data,$perPage=false,$relation = false)
    {
        $customBlock = DB::table('company_custom_blocks')
            ->when($relation, function ($query2) use ($relation) {
                return $query2->load($relation);
            })
            ->when(isset($data['keyword']), function ($query2) use ($data) {
                return $query2->where('title', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('name', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('url', 'LIKE', "%".$data['keyword']."%");
            })
            ->when(isset($data['type']), function ($query2) use ($data) {
                return $query2->where('type', $data['type']);
            })
            ->when(isset($data['id']), function ($query2) use ($data) {
                return $query2->where('id', $data['id']);
            })
            ->when(isset($data['company_id']), function ($query2) use ($data) {
                return $query2->where('company_id', $data['company_id']);
            })
            ->when(isset($data['active']), function ($query2) use ($data) {
                return $query2->where('active', $data['active']);
            })
            ->when(isset($data['orderBy']), function ($query2) use ($data) {
                return $query2->orderBy($data['orderBy']);
//                ->orderBy('title');
            })->select('company_id','name','title','url','text')
              ->paginate($perPage);

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
    public function getById($id,$type=false)
    {
        $customBlock = DB::table('company_custom_blocks')
            ->where('id', $id)
            ->when(isset($type), function ($query2) use ($type) {
                return $query2->where('type', $type);
            })
            ->first();

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