<?php

namespace App\Repository\Clients;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Client;

class ClientRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $company_id
     * @param int $perPage
     * @param int $relation
     *
     * @return $client
     */
    public function getAll($data,$perPage=false,$company_id=NULL,$relation = false)
    {
        $client = DB::table('clients')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%");
            })
        //enum
            ->when(isset($data['position']), function ($query) use ($data) {
                return $query->where('position', $data['position']);
            })            
            ->when(isset($data['vip']), function ($query) use ($data) {
                return $query->where('vip', $data['vip']);
            })            
            ->when(isset($data['spammer']), function ($query) use ($data) {
                return $query->where('spammer', $data['spammer']);
            })            
            ->when(isset($data['zendesk_id']), function ($query) use ($data) {
                return $query->where('zendesk_id', $data['zendesk_id']);
            })            
            ->when(isset($data['client_company_id']), function ($query) use ($data) {
                return $query->where('client_company_id', $data['client_company_id']);
            })
            ->when(isset($company_id), function ($query) use ($company_id) {
                return $query->where('company_id', $company_id);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->paginate($perPage);

        return $client;
    }
    /**
     * @param int $id
     * @param int $relation
     * @param int $company_id
     *
     * @return $client
     */
    public function getById($id,$relation = false)
    {
        $client = DB::table('clients')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->first();

        return $client;
    }
    /**
     * @param int $company_id
     * @param int $requestData
     *
     * @return $client
     */
    public function create($company_id,$requestData)
    {
        $client = DB::table('clients')->insertGetId([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'position' => $requestData['position'],
            'note' => $requestData['note'],
            'spammer' => $requestData['spammer'],
            'vip' => $requestData['vip'],
            'zendesk_id' => $requestData['zendesk_id'],
            'client_company_id' => $requestData['client_company_id'],
        ]);
        return $client;
    }

    /**
     * @param int $company_id
     * @param int $requestData
     *
     * @return $client
     */
    public function update($id,$company_id,$requestData)
    {
        $client = DB::table('clients')
        ->where(['id' => $id])
        ->update([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'position' => $requestData['position'],
            'note' => $requestData['note'],
            'spammer' => $requestData['spammer'],
            'vip' => $requestData['vip'],
            'zendesk_id' => $requestData['zendesk_id'],
            'client_company_id' => $requestData['client_company_id'],
        ]);
        return $client;
    }
    /**
     * @param int $id
     * @param int $avatar
     *
     * @return $client
     */
    public function updateAvatar($id,$avatar)
    {
        $client = DB::table('clients')
            ->where(['id' => $id])
            ->update(['avatar' => $avatar]);
        return $client;
    }
    /**
     * @param int $id
     * @param int $vip
     *
     * @return $client
     */
    public function updateVip($id,$vip)
    {
        $client = DB::table('clients')
            ->where(['id' => $id])
            ->update(['vip' => $vip]);
        return $client;
    }
    /**
     * @param int $id
     * @param int $spammer
     *
     * @return $client
     */
    public function updateSpammer($id,$spammer)
    {
        $client = DB::table('clients')
            ->where(['id' => $id])
            ->update(['spammer' => $spammer]);
        return $client;
    }
    /**
     * @param int $id
     * @param int $company_id
     * @param int $url
     *
     * @return $client
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $client = DB::table('clients')
                    ->where('id', $id)
                    ->delete();
        return $client;
    }
    /**
     * @param int $data
     * @param int $company_id
     *
     * @return $client
     */
    public function merge($data,$company_id=null)
    {
        $client = DB::table('clients')
                    ->where('id', $id)
                    ->delete();
        return $client;
    }
        // merge_with_client_id
        // client_id
}

