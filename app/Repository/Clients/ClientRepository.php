<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Client;

class ClientRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $client
     */
    public function getAll($data,$company_id=null,$perPage=false,$relation = false)
    {
        $client = DB::table('clients')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('title', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('name', 'LIKE', "%".$data['keyword']."%")
                    ->orWhere('url', 'LIKE', "%".$data['keyword']."%");
            })
            ->when(isset($data['type']), function ($query) use ($data) {
                return $query->where('type', $data['type']);
            })
            ->when(isset($data['id']), function ($query) use ($data) {
                return $query->where('id', $data['id']);
            })
            ->when(isset($company_id), function ($query) use ($data) {
                return $query->where('company_id', $data['company_id']);
            })
            ->when(isset($data['active']), function ($query) use ($data) {
                return $query->where('active', $data['active']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })->select('company_id','name','title','url','text')
              ->orderBy('sort')
              ->paginate($perPage);

        return $client;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $client
     */
    public function getById($id,$relation = false,$type=null)
    {
        $client = DB::table('clients')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->when(isset($type), function ($query) use ($type) {
                return $query->where('type', $type);
            })
            ->first();

        return $client;
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
     * @return $client
     */
    public function createclient($company_id,$requestData)
    {
        $client = DB::table('clients')->insertGetId([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'title' => $requestData['title'],
            'text' => $requestData['text'],
            'type' => $requestData['type'],
            'active' => true
        ]);

        if($requestData['type'] =='dynamic')
        {
            $client->update([
                'url' => $requestData['url'],
                'secret_key' => $requestData['secret_key']
            ]);
            $this->createclientParams($client,'subdomain');
        }
        return $client;
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
     * @return $client
     */
    public function update($id,$company_id,$requestData)
    {
        $client = DB::table('clients')
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
        return $client;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $client
     */
    public function updateSort($id,$sort)
    {
        $client = DB::table('clients')
            ->where(['id' => $id])
            ->update(['sort' => $sort]);
        return $client;
    }
    /**
     * @param int $id
     *
     * @return $client
     */
    public function trigger($id)
    {
        $client = $this->getById($id);
        $client->update([
            'active' => ($client!=false)
        ]);
        return $client;

    }
    /**
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
     * @param int $company_id
     * @param int $url
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
        merge_with_client_id
        client_id


