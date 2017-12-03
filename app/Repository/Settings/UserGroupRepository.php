<?php

namespace App\Repository\Settings;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Ticket;

class UserGroupRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $ticket
     */
    public function getAll($data,$company_id=null,$perPage=false,$relation = false)
    {
        $ticket = DB::table('user_groups')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%");
            })
        //id
            ->when(isset($company_id), function ($query) use ($data) {
                return $query->where('company_id', $company_id);
            })
        //fields
            ->when(isset($deleted), function ($query) use ($data) {
                return $query->where('deleted', $data['deleted']);
            })
        //date
            ->when(isset($deleted_at), function ($query) use ($data) {
                return $query->where('deleted_at', $data['deleted_at']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->paginate($perPage);

        return $ticket;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $ticket
     */
    public function getById($id,$relation = false)
    {
        $ticket = DB::table('user_groups')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->first();

        return $ticket;
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
     * @return $ticket
     */
    public function create($company_id,$name)
    {
        $ticket = DB::table('user_groups')->insertGetId([
            'company_id' => $company_id,
            'name' => $name,
        ]);
        return $ticket;
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
     * @return $ticket
     */
    public function update($id,$company_id,$requestData)
    {
        $ticket = DB::table('user_groups')
        ->where(['id' => $id])
        ->update([
            'company_id' => $company_id,
            'name' => $requestData['name'],
        ]);
        return $ticket;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $ticket
     */
    public function delete($id)
    {
        $ticket = DB::table('user_groups')
                    ->where('id', $id)
                    ->update([
                        'deleted' => true,
                        'deleted_at' => $this->now()
                    ]);
        return $ticket;
    }
}


