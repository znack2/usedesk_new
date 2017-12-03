<?php

namespace App\Repository\Settings\Company;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Collection;

class CompanyRepository extends AbstractRepository
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
        $customBlock = DB::table('companies')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%");
            })
        //enum
            ->when(isset($data['timezone']), function ($query) use ($data) {
                return $query->where('timezone', $data['timezone']);
            })
            ->when(isset($data['id']), function ($query) use ($data) {
                return $query->where('id', $data['id']);
            })
            ->when(isset($company_id), function ($query) use ($data) {
                return $query->where('company_id', $data['company_id']);
            })
            ->when(isset($data['blocked']), function ($query) use ($data) {
                return $query->where('blocked', $data['blocked']);
            })            
            ->when(isset($data['lang']), function ($query) use ($data) {
                return $query->where('lang', $data['lang']);
            })            
            ->when(isset($data['last_login_at']), function ($query) use ($data) {
                return $query->where('last_login_at', $data['last_login_at']);
            })            
            ->when(isset($data['registered_at']), function ($query) use ($data) {
                return $query->where('registered_at', $data['registered_at']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
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
        $customBlock = DB::table('companies')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
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
    public function create($company_id,$requestData)
    {
        $customBlock = DB::table('companies')->insertGetId([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'lang' => $requestData['lang'],
            'timezone' => $requestData['timezone'],
            'registered_at' => $this->now(),
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
    public function update($id,$company_id,$requestData)
    {
        $customBlock = DB::table('companies')
        ->where(['id' => $id])
        ->update([
            'company_id' => $company_id,
            'name' => $requestData['name'],
            'lang' => $requestData['lang'],
            'timezone' => $requestData['timezone'],
        ]);
        return $customBlock;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $customBlock
     */
    public function updateBlocked($id,$blocked)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['blocked' => $blocked]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function updateLogo($id,$logotype)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['logotype' => $logotype]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function updateLang($id,$lang)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['lang' => $lang]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function updateLastLogin($id,$lang)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['last_login_at' => $this->now()]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function enableImport($id,$logotype)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['import_enabled' => $logotype]);
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $customBlock
     */
    public function enableSignature($id,$signature_enabled)
    {
        $customBlock = DB::table('companies')
            ->where(['id' => $id])
            ->update(['signature_enabled' => $signature_enabled]);
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
        $customBlock = DB::table('companies')
                    ->where('id', $id)
                    ->delete();
        return $customBlock;
    }
    /**
     * @param int $id
     *
     * @return $ticket
     */
    public function toggleField($id,$field,$value)
    {
        $ticket = DB::table('companies')
            ->where(['id' => $id])
            ->update([$field => $value]);
        return $ticket;
    }
}


