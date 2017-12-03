<?php

namespace App\Repository\Settings\Company;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\CompanyWorkingDay;

class WorkingDaysRepository extends AbstractRepository
{
    /**
     * @param int $data
     * @param int $perPage
     * @param int $relation
     *
     * @return $workingDays
     */
    public function getAll($data,$company_id=null,$perPage=false,$relation = false)
    {
        $workingDays = DB::table('company_working_days')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //enum
            ->when(isset($data['day']), function ($query) use ($data) {
                return $query->where('day', $data['day']);
            })
        //id
            ->when(isset($company_id), function ($query) use ($data) {
                return $query->where('company_id', $data['company_id']);
            })
        //fields
            ->when(isset($data['is_working']), function ($query) use ($data) {
                return $query->where('is_working', $data['is_working']);
            })     
        //date       
            ->when(isset($data['start']), function ($query) use ($data) {
                return $query->where('start', $data['start']);
            })      
            ->when(isset($data['end']), function ($query) use ($data) {
                return $query->where('end', $data['end']);
            })        
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->paginate($perPage);

        return $workingDays;
    }
    /**
     * @param int $id
     * @param int $type
     *
     * @return $workingDays
     */
    public function getById($id,$relation = false)
    {
        $workingDays = DB::table('company_working_days')
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
            ->where('id', $id)
            ->first();

        return $workingDays;
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
     * @return $workingDays
     */
    public function create($company_id,$requestData)
    {
        $workingDays = DB::table('company_working_days')->insertGetId([
            'company_id' => $company_id,
            'day' => $requestData['day'],
            'start' => $requestData['start'],
            'end' => $requestData['end'],
        ]);
        return $workingDays;
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
     * @return $workingDays
     */
    public function update($id,$company_id,$requestData)
    {
        $workingDays = DB::table('company_working_days')
        ->where(['id' => $id])
        ->update([
            'company_id' => $company_id,
            'day' => $requestData['day'],
            'start' => $requestData['start'],
            'end' => $requestData['end'],
        ]);
        return $workingDays;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $workingDays
     */
    public function toggleWorking($id)
    {
        $workingDays = $this->getById($id);
        $workingDays->is_working = !$workingDays->is_working; 
        $workingDays->save();
        return $workingDays;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $workingDays
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $workingDays = DB::table('company_working_days')
                    ->where('id', $id)
                    ->delete();
        return $workingDays;
    }



