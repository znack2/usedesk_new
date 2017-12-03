<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\CompanyCustomBlock;

class BlockRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $customBlock
     */
    public function getAll($data,$perPage=false,$company_id=NULL,$relation = false)
    {
        $customBlock = DB::table('company_custom_blocks')
            //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('title', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('name', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('url', 'LIKE', "%".$data['keyword']."%");
            })
            //enum
            ->when(isset($data['type']), function ($query) use ($data) {
                return $query->where('type', $data['type']);
            })
            ->when(isset($company_id), function ($query) use ($company_id) {
                return $query->where('company_id', $company_id);
            })
            ->when(isset($data['active']), function ($query) use ($data) {
                return $query->where('active', $data['active']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })->select('company_id','name','title','url','text')
              ->orderBy('sort')
              ->paginate($perPage);

        return $customBlock;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $customBlock
     */
    public function getById($id,$relation = false)
    {
        $customBlock = DB::table('company_custom_blocks')
            // ->when($relation, function ($query) use ($relation) {
            //     return $query->load($relation);
            // })
            ->where('id', $id)
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
        $customBlock = $this->createCustomBlock(
            config('CompanyCustomBlock.YANDEX_NAME'),
            config('CompanyCustomBlock.YANDEX_TITLE'),
            config('CompanyCustomBlock.YANDEX_TEXT'),
            config('CompanyCustomBlock.TYPE_STATIC'),
            $company_id,
            $url
        );
        $this->createCustomBlockParams($customBlock,'subdomain');
        return $customBlock;
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
                config('CompanyCustomBlock.RETAIL_NAME'),
                config('CompanyCustomBlock.RETAIL_TITLE'),
                config('CompanyCustomBlock.RETAIL_TEXT'),
                config('CompanyCustomBlock.TYPE_DYNAMIC'),
                $company_id,
                $url
            );

            $this->createCustomBlockParams($customBlock,'subdomain');
            return $customBlock;
        }
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
    public function createCustomBlock($company_id,$requestData)
    {
        $customBlock = DB::table('company_custom_blocks')->insertGetId([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'title' => $requestData['title'],
            'text' => $requestData['text'],
            'type' => $requestData['type'],
            'active' => true,
            'url' => (DB::raw( 'type') == 'dynamic' && isset($requestData['url'])) ? $requestData['url'] : '',
            'secret_key' => (DB::raw( 'type') == 'dynamic' && isset($requestData['secret_key'])) ? $requestData['secret_key'] : ''
        ]);

        if($requestData['type'] =='dynamic')
        {
            $this->createCustomBlockParams($customBlock,'subdomain');
        }
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
    public function update($id,$company_id,$requestData)
    {
        $customBlock = DB::table('company_custom_blocks')
        ->where(['id' => $id])
        ->update([
            'sort' => DB::raw('sort+1'),
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'title' => $requestData['title'],
            'text' => $requestData['text'],
            'url' => (DB::raw( 'type') == 'dynamic' && isset($requestData['url'])) ? $requestData['url'] : '',
            'secret_key' => (DB::raw( 'type') == 'dynamic' && isset($requestData['secret_key'])) ? $requestData['secret_key'] : ''
        ]);
        return $customBlock;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $customBlock
     */
    public function updateSort($id,$sort)
    {
        $customBlock = DB::table('company_custom_blocks')
            ->where(['id' => $id])
            ->update(['sort' => $sort]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function toggleActive($id)
    {
        $customBlock = $this->getById($id);
        $customBlock->active = !$customBlock->active; 
        $customBlock->save();

        // $customBlock->update([
        //     'active' =>  ($customBlock->active!=false)
        // ]);
        return $customBlock;

    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $customBlock
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $customBlock = DB::table('company_custom_blocks')
                    ->where('id', $id)
                    ->delete();
        return $customBlock;
    }









    /**
     * @param int $company_id
     * @param int $active
     * @param int $customBlock_id
     *
     * @return $customBlockParam
     */
    public function getCustomBlockParams($company_id,$active = 1,$customBlock_id)
    {
        $customBlockParam = DB::table('companyCustomBlockParams')
            ->where('company_custom_block_id', $customBlock_id)
            ->where('company_id', $company_id)
            ->where('active', $active)
            ->orderBy('sort')
            ->orderBy('title')
            ->get();
        return $customBlockParam;
    }
    /**
     * @param int $customBlock_id
     * @param int $subdomain
     * @param int $value
     *
     * @return $customBlockParam
     */
    private function createCustomBlockParams($customBlock_id,$subdomain,$value = null)
    {
        $customBlockParam = DB::table('companyCustomBlockParams')->insert([
            'company_custom_block_id' => $customBlock_id,
            'key' => $subdomain,
            'value' => $value,
        ]);
        return $customBlockParam;
    }
    /**
     * @param int $customBlock_id
     * @param int $data
     *
     * @return $customBlockParam
     */
    public function deleteParam($customBlock_id,$data)
    {
        $customBlockParam = $this->getCustomBlockParams($customBlock_id,$data);

        if ($paramIds = array_filter(array_fetch($data['params'], []), 'id'))
        {
            $customBlockParam->whereNotIn('id', $paramIds);
        }
        $customBlockParam->delete();
        return $customBlockParam;
    }
}