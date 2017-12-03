<?php

namespace App\Repository\Settings;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\SystemUpdate;

class SystemUpdateRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $systemUpdate
     */
    public function getAll($data,$company_id=null,$perPage=false,$relation = false)
    {
        $systemUpdate = DB::table('system_updates')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%");
            })
        //enum
            ->when(isset($data['type']), function ($query) use ($data) {
                return $query->where('type', $data['type']);
            })
        //fields
            ->when(isset($content), function ($query) use ($data) {
                return $query->where('content', $data['content']);
            })
        ->when(isset($button_name), function ($query) use ($data) {
                return $query->where('button_name', $data['button_name']);
            })
        ->when(isset($button_url), function ($query) use ($data) {
                return $query->where('button_url', $data['button_url']);
            })
        //date
            ->when(isset($deleted_at), function ($query) use ($data) {
                return $query->where('last_updated_at', $data['deleted_at']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->paginate($perPage);

        return $systemUpdate;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $systemUpdate
     */
    public function getById($id,$relation = false)
    {
        $systemUpdate = DB::table('system_updates')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->first();

        return $systemUpdate;
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
     * @return $systemUpdate
     */
    public function create($type,$requestData)
    {
        $systemUpdate = DB::table('system_updates')->insertGetId([
            'type' => $type,
            'name' => $requestData['name'],
            'content' => $requestData['content'],
            'button_name' => $requestData['button_name'],
            'button_url' => $requestData['button_url']
        ]);
        return $systemUpdate;
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
     * @return $systemUpdate
     */
    public function update($id,$company_id,$requestData)
    {
        $systemUpdate = DB::table('system_updates')
        ->where(['id' => $id])
        ->update([
            'type' => $type,
            'name' => $requestData['name'],
            'content' => $requestData['content'],
            'button_name' => $requestData['button_name'],
            'button_url' => $requestData['button_url'],
            'last_updated_at' => $this->now()
        ]);
        return $systemUpdate;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $systemUpdate
     */
    public function delete($id)
    {
        $systemUpdate = DB::table('system_updates')
                    ->where('id', $id)
                    ->update([
                        'deleted' => true,
                        'deleted_at' => $this->now()
                    ]);
        return $systemUpdate;
    }
}


