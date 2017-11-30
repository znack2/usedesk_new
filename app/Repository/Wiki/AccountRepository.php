<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Account;

class AccountRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $customBlock
     */
    public function getAll($data,$company_id=null,$perPage=false,$relation = false)
    {
        $customBlock = DB::table('uh_accounts')
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
            ->when(isset($company_id), function ($query2) use ($data) {
                return $query2->where('company_id', $data['company_id']);
            })
            ->when(isset($data['active']), function ($query2) use ($data) {
                return $query2->where('active', $data['active']);
            })
            ->when(isset($data['orderBy']), function ($query2) use ($data) {
                return $query2->orderBy($data['orderBy']);
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
    public function getById($id,$type=null)
    {
        $customBlock = DB::table('uh_accounts')
            ->where('id', $id)
            ->when(isset($type), function ($query2) use ($type) {
                return $query2->where('type', $type);
            })
            ->first();

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
    public function createCustomBlock($company_id,$requestData)
    {
        $customBlock = DB::table('uh_accounts')->insertGetId([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'title' => $requestData['title'],
            'text' => $requestData['text'],
            'type' => $requestData['type'],
            'active' => true
        ]);

        if($requestData['type'] =='dynamic')
        {
            $customBlock->update([
                'url' => $requestData['url'],
                'secret_key' => $requestData['secret_key']
            ]);
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
        $customBlock = DB::table('uh_accounts')
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
        $customBlock = DB::table('uh_accounts')
            ->where(['id' => $id])
            ->update(['sort' => $sort]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function trigger($id)
    {
        $customBlock = $this->getById($id);
        $customBlock->update([
            'active' => ($customBlock!=false)
        ]);
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
        $customBlock = DB::table('uh_accounts')
                    ->where('id', $id)
                    ->delete();
        return $customBlock;
    }



