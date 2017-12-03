<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Macros;

class MacrosRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $macros
     */
    public function getAll($data,$perPage=false,$category_id=null,$relation = false)
    {
        $macros = DB::table('macroses')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%")
                             ->orWhere('message', 'LIKE', "%".$data['keyword']."%");
            })
        //enum
            ->when(isset($data['privacy']), function ($query) use ($data) {
                return $query->where('privacy', $data['privacy']);
            })
        //id
            ->when(isset($company_id), function ($query) use ($company_id) {
                return $query->where('company_id', $company_id);
            })
            ->when(isset($for_user_id), function ($query) use ($data) {
                return $query->where('for_user_id', $data['for_user_id']);
            })
        //fields
            ->when(isset($deleted), function ($query) use ($data) {
                return $query->where('deleted', $data['deleted']);
            })
            ->when(isset($enabled), function ($query) use ($data) {
                return $query->where('enabled', $data['enabled']);
            })
        //date
            ->when(isset($updated_at), function ($query) use ($data) {
                return $query->where('updated_at', $data['updated_at']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->orderBy('sort')
              ->paginate($perPage);

        return $macros;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $macros
     */
    public function getById($id,$relation = false)
    {
        $macros = DB::table('macroses')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->first();

        return $macros;
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
     * @return $macros
     */
    public function create($company_id,$requestData)
    {
        $macros = DB::table('macroses')->insertGetId([
            'name' => $requestData['name'],
            'message' => $requestData['message'],
            'company_id' => $company_id,
            'enabled' => true,
            'deleted' => false,
        ]);
        return $macros;
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
     * @return $macros
     */
    public function update($id,$category_id,$user_id,$requestData)
    {
        $macros = DB::table('macroses')
        ->where(['id' => $id])
        ->update([
            'name' => $requestData['name'],
	        'message' => $requestData['message'],
            'changed_by_user' => $user_id,
            'company_id' => $company_id,
	        'updated_at' => $this->now()
        ]);
        return $macros;
    }
    /**
     * @param int $id
     *
     * @return $macros
     */
    public function toggerEnable($id)
    {
        $macros = $this->getById($id);
        $macros->enabled = !$macros->enabled; 
        $macros->save();
        return $macros;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $macros
     */
    public function changePrivacy($id,$privacy)
    {
        $macros = DB::table('macroses')
            ->where(['id' => $id])
            ->update(['privacy' => $privacy]);
        return $macros;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $macros
     */
    public function updateSort($id,$sort)
    {
        $macros = DB::table('macroses')
            ->where(['id' => $id])
            ->update(['sort' => $sort]);
        return $macros;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $macros
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $macros = $this->getById($id);
        $macros->deleted = !$macros->deleted; 
        $macros->save();
        return $macros;
    }
}


