<?php

namespace App\Repository\Blocks;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use App\Models\Trigger;

class TriggerRepository extends AbstractRepository
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

            $table->boolean('use_word_forms')->default(0);

        $ticket = DB::table('triggers')
        //relation
            ->when($relation, function ($query) use ($relation) {
                return $query->load($relation);
            })
        //search
            ->when(isset($data['keyword']), function ($query) use ($data) {
                return $query->where('name', 'LIKE', "%".$data['keyword']."%");
            })
        //enum
            ->when(isset($data['channel']), function ($query) use ($data) {
                return $query->where('channel', $data['channel']);
            })
            ->when(isset($data['priority']), function ($query) use ($data) {
                return $query->where('priority', $data['priority']);
            })
        //id
            ->when(isset($company_id), function ($query) use ($data) {
                return $query->where('company_id', $data['company_id']);
            })
        //fields
            ->when(isset($spam_score), function ($query) use ($data) {
                return $query->where('spam_score', $data['spam_score']);
            })
            ->when(isset($notification_email), function ($query) use ($data) {
                return $query->where('notification_email', $data['notification_email']);
            })
            ->when(isset($email_channel_subject), function ($query) use ($data) {
                return $query->where('email_channel_subject', $data['email_channel_subject']);
            })
            ->when(isset($email_channel_email), function ($query) use ($data) {
                return $query->where('email_channel_email', $data['email_channel_email']);
            })
            ->when(isset($nps_sent), function ($query) use ($data) {
                return $query->where('nps_sent', $data['nps_sent']);
            })
            ->when(isset($group), function ($query) use ($data) {
                return $query->where('group', $data['group']);
            })
            ->when(isset($contact), function ($query) use ($data) {
                return $query->where('contact', $data['contact']);
            })            
        //date
            ->when(isset($published_at), function ($query) use ($data) {
                return $query->where('published_at', $data['published_at']);
            })
            ->when(isset($last_viewed_at), function ($query) use ($data) {
                return $query->where('last_viewed_at', $data['last_viewed_at']);
            })
            ->when(isset($status_updated_at), function ($query) use ($data) {
                return $query->where('status_updated_at', $data['status_updated_at']);
            })
           ->when(isset($last_updated_at), function ($query) use ($data) {
                return $query->where('last_updated_at', $data['last_updated_at']);
            })
            ->when(isset($data['orderBy']), function ($query) use ($data) {
                return $query->orderBy($data['orderBy']);
            })//->select('company_id','name','title','url','text')
              ->orderBy('position');
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
        $ticket = DB::table('triggers')
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
    public function createticket($status_id,$client_id,$assignee_id,$email_channel_id,$company_id,$requestData)
    {
        $ticket = DB::table('triggers')->insertGetId([
            'status_id' => $status_id
            'client_id' => $client_id
            'assignee_id' => $assignee_id
            'email_channel_id' => $email_channel_id
            'company_id' => $company_id

            'subject' => $requestData['subject'],
            'email_channel_email' => $requestData['email_channel_email'],
            'email_channel_subject' => $requestData['email_channel_subject'],
            'email_channel_subject' => $requestData['email_channel_subject'],
            'notification_email' => $requestData['notification_email'],
            'spam_score' => $requestData['spam_score'],
            'nps_sent' => $requestData['nps_sent'],
            'contact' => $requestData['contact'],
            'group' => $requestData['group'],
            
            'type' => $type,
            'priority' => $priority,
            'channel' => $channel,

            'status_updated_at' => 
            'last_updated_at' => 
            'last_viewed_at' => 
            'published_at' => 


        // 'social_id' => $faker->word,
        // 'zendesk_id' => $faker->word,
        // 'owner_id' => $faker->randomNumber(),
        // 'additional_id' => $faker->word,
        // 'telephony_id' => $faker->word,

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
    public function update($id,$category_id,$requestData)
    {
        $ticket = DB::table('triggers')
        ->where(['id' => $id])
        ->update([
	        'title' => $requestData['title'],
	        'text' => $requestData['text'],
	        'public' => $requestData['public'],
            'category_id' => $category_id,
	        'last_updated_at' => $this->now()
        ]);
        return $ticket;
    }
    /**
     * @param int $value
     * @param int $key
     *
     * @return $ticket
     */
    public function changePosition($id,$position)
    {
        $ticket = DB::table('triggers')
            ->where(['id' => $id])
            ->update(['position' => $position]);
        return $ticket;
    }
    /**
     * @param int $id
     *
     * @return $macros
     */
    public function toggleEnable($id)
    {
        $macros = $this->getById($id);
        $macros->enabled = !$macros->enabled; 
        $macros->save();
        return $macros;
    }
    /**
     * @param int $id
     *
     * @return $macros
     */
    public function toggleManual_starting($id)
    {
        $macros = $this->getById($id);
        $macros->manual_starting = !$macros->manual_starting; 
        $macros->save();
        return $macros;
    }
    /**
     * @param int $company_id
     * @param int $url
     *
     * @return $ticket
     */
    public function delete($id,$company_id=null,$url=null)
    {
        $macros = $this->getById($id);
        $macros->deleted = !$macros->deleted; 
        $macros->save();
        return $macros;
    }



